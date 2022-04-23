<html>
  <body>
  <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=864pb83r18suxp&redirect_uri=http://localhost/alt/aaa/index.php&state=987654321&scope=r_emailaddress+r_liteprofile">Register With LinkedIn</a>
</body>   
</html>

					
<?php 
if(isset($_GET['code'])){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://www.linkedin.com/oauth/v2/accessToken");
	curl_setopt($ch, CURLOPT_POST, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"grant_type=authorization_code&code=".$_GET['code']."&redirect_uri=http://localhost/alt/aaa/index.php&client_id=LWt5vD3flnB6f9vL&client_secret=LWt5vD3flnB6f9vL");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	curl_close ($ch);
}
if(isset($_GET['code']) && json_decode($server_output)->access_token!=''){
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL,"https://api.linkedin.com/v2/emailAddress?q=members&projection=(elements*(handle~))&oauth2_access_token=".json_decode($server_output)->access_token);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $server_output2 = curl_exec ($ch);
     curl_close ($ch);
      
     $user_data = json_decode($server_output2, true);

     print_r($user_data['elements'][0]['handle~']['emailAddress']);
     

}
if(isset($_GET['code']) && json_decode($server_output)->access_token!=''){
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL,"https://api.linkedin.com/v2/me?oauth2_access_token=".json_decode($server_output)->access_token);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $server_output2 = curl_exec ($ch);
     curl_close ($ch);
      
     $user_data = json_decode($server_output2, true);
  
     print_r($user_data ['localizedLastName']);
     echo "<br>";
     print_r($user_data['localizedFirstName']);

}
?>