<?php
session_start();

$name=$_SESSION['name'];
$rollno=$_SESSION['rollno'];

$batch=$_POST['batch'];
$dept=$_POST['dept'];
$search=$_POST['rollno_search'];
$_SESSION['batch']=$batch;
$_SESSION['dept']=$dept;
$_SESSION['search']=$search;
  echo $_SESSION['dept'];  
header("location: search.php");

 ?>