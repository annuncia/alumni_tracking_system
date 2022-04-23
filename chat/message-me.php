<?php 

$mysqli = new mysqli("localhost","root","","alumni");
$sql="select message from chat where from_rollno ='18itr04'";
$stmt = $mysqli->prepare($sql);
//$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($message);
while($stmt->fetch())
{
    echo $message,"<br>";
}
$stmt->close();

?>