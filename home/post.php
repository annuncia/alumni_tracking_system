<?php
session_start();
 $para=$_POST["paragraph"];
 $path=$_POST["path"];
 $username=$_SESSION["name"];
 $rollno=$_SESSION["rollno"];
 $conn=mysqli_connect("localhost","root","","alumni");
 $sql="SELECT C_des,profile_pic_path from signup where rollno='$rollno'";
 $res=mysqli_query($conn,$sql);
 $res1=mysqli_fetch_array($res);
 $des=$res1['C_des'];
 $profile_pic=$res1['profile_pic_path'];
 $sql="insert into post values('$username','$rollno','$des','$para','$profile_pic','$path')";
 $res=mysqli_query($conn,$sql);
 header("location: index.php");
 ?>