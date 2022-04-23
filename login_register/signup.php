<?php
 
 $name=$_POST["username"];
 $rollno=$_POST["rollno"];
 $email=$_POST["email"];
 $dept=$_POST["dept"];
 $batch=$_POST["batch"];
 $class=$_POST["class"];
 $phonenumber=$_POST["phonenumber"];
 $password=$_POST["password"];
 $company=$_POST["company"];
 $des=$_POST["des"];
 $salary=$_POST["salary"];
 $profile_pic_path=$_POST["profile_pic"];
 $conn=mysqli_connect("localhost","root","","alumni");
 $sql="insert into signup(name,rollno,email,dept,batch,class,phonenumber,password,C_company,C_des,salary,profile_pic_path)  values('$name','$rollno','$email','$dept','$batch','$class','$phonenumber','$password','$company','$des','$salary','$profile_pic_path')";
 $res=mysqli_query($conn,$sql);
if($des == "CEO")
 {
  
  $sql1="insert into notable_alumni values('$name','$rollno','$des','$profile_pic_path','$company')";
  $res1=mysqli_query($conn,$sql1);
  echo "entered succesfully" ,$res1;
 }
 $sql1="insert into user_details(name,rollno,company_1,des_1,profile_pic) values('$name','$rollno','$company','$des','$profile_pic_path')";
 $res1=mysqli_query($conn,$sql1);
 echo "entered succesfully" ,$res1;
 header("location: index.html");
 
?>