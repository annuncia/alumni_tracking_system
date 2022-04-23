<?php
  SESSION_START();
  $_SESSION['NUM']=32;
  $token='1107995021:AAEm4dfxlb04hweF69ky3AIfVs4yUksZCZc';
  $user_id="677907523";
  $msg='Ajay welcome ';
  $request_params=[
    'chat_id'=>$user_id,
     'text'=>$msg
  ];
  $request_url='https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
  $res=file_get_contents($request_url);

  $request_url='https://api.telegram.org/bot'.$token.'/getUpdates';
  $res=file_get_contents($request_url);
  $r=json_decode($res,true);
  //print_r($r);
  $aj=$r["result"][32]["message"]["text"];
  echo $aj;
   ?>     
   
   
  