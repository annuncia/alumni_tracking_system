<?php 

$mysqli = new mysqli("localhost","root","","alumni");
$sql="select name from signup where rollno =?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name);
$stmt->fetch();
$stmt->close();
echo $name;
?>