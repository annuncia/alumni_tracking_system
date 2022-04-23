<?php
SESSION_START();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$message=$_POST['message'];
$token='1107995021:AAEm4dfxlb04hweF69ky3AIfVs4yUksZCZc';
$user_id="677907523";
$msg=nl2br("Name :".$name."\r\n Rollno :".$rollno."\r\nFeedBack :".$message. "\r\nThank you");
$request_params=[
    'chat_id'=>$user_id,
     'text'=>$msg
  ];
  $request_url='https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
  $res=file_get_contents($request_url);
?>
