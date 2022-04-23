<?php 
$to_email = 'ajayk.18it@kongu.edu';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail ';
$headers = 'snpajay2001@gmail.com';
mail($to_email, $subject, $message, $headers);
echo "This email is sent using PHP Mail";
?>