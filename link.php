<?php
 SESSION_START();
  $token='1107995021:AAEm4dfxlb04hweF69ky3AIfVs4yUksZCZc';
  $user_id="-335907361";
  $request_url='https://api.telegram.org/bot'.$token.'/getUpdates';
  $res=file_get_contents($request_url);
  $r=json_decode($res,true);
 
  $num=$_SESSION['NUM'];
  $num=$num+1;
  $_SESSION['NUM']=$num;
  echo $_SESSION['NUM'];    
  $aj= $r['result'][$num]["message"]["text"];
  echo $aj;
  $conn=mysqli_connect("localhost","root","","alumni");
  $sql="SELECT name,dept,class,batch FROM signup where rollno='$aj'";
      $result=mysqli_query($conn,$sql);
      $row_count=mysqli_num_rows($result);
   if($row_count>"0")
   {
      $det=mysqli_fetch_array($result);
      $msg=nl2br("Name : ".$det['name']."\nclass : ".$det['class']."\n dept : ".$det['dept']."\nbatch : ".$det['batch']);
      echo $msg;
      $request_params=[
          'chat_id'=>$user_id,
           'text'=>$msg
        ];
        $request_url_msg='https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
        $res1=file_get_contents($request_url_msg);
      }
   else{
       $msg= "Enter a valid rollno !";
       $request_params=[
         'chat_id'=>$user_id,
          'text'=>$msg
       ];
       $request_url_msg='https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
       $res1=file_get_contents($request_url_msg);
}
?>
  