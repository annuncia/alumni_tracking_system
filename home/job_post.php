<?php
session_start();
$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];
$job_name=$_POST['job_name'];
$job_type=$_POST['job_type'];
$job_loc=$_POST['job_loc'];
$job_link=$_POST['job_link'];
$date=$_POST['date'];
$conn=mysqli_connect("localhost","root","","alumni");
$sql="insert into job values('$name','$rollno','$job_name','$job_loc','$job_type','$job_link','$date')";
$res=mysqli_query($conn,$sql);
echo "post successfully";
header("location: index.php");
 ?>