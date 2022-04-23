<?php
  $username=$_POST["name"];
  $rollno="18itr004";
  $address=$_POST["C_address"];
  $company=$_POST["company_1"];
  $des=$_POST["des_1"];
  $company_2=$_POST["company_2"];
  $des_2=$_POST["des_2"];
  $company_3=$_POST["company_3"];
  $des_3=$_POST["des_3"];
  $skill_name=$_POST["skill_1"];
  $skill_per=$_POST["skill_per_1"];
  $skill_name_2=$_POST["skill_2"];
  $skill_per_2=$_POST["skill_per_2"];
  $skill_name_3=$_POST["skill_3"];
  $skill_per_3=$_POST["skill_per_3"];
  $profile_pic_path=$_POST["profile_pic"];
  $c_location=$_POST["c_location"];
  echo $c_location;
  $website=$_POST["website"];
  $linkedIn=$_POST["linkedIn"];
  $company_count=$_POST["company_count"];
  $skills_count=$_POST["skills_count"];
  $conn=$conn=mysqli_connect("localhost","root","","alumni");
  $sql=" UPDATE user_details set name='ajay' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set P_address='$address' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set C_location='$c_location' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set website_link='$website' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set linkedin_link='$linkedIn' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set company_count='$company_count' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  $sql=" UPDATE user_details set skills_count='$skills_count' where rollno='$rollno'";
  $res=mysqli_query($conn,$sql);
  
  if(!empty($phonenumber))
  {
     $sql=" UPDATE user_details set phonenumber='$phonenumber' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($address))
  {
     $sql=" UPDATE user_details set Address='$address' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($company))
  {
     $sql=" UPDATE user_details set company_1='$company' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($des))
  {
     $sql=" UPDATE user_details set des_1='$des' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($company_2))
  {
     $sql=" UPDATE user_details set company_2='$company_2' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($des_2))
  {
     $sql=" UPDATE user_details set des_2='$des_2' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($company_3))
  {
     $sql=" UPDATE user_details set company_3='$company_3' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($des_3))
  {
     $sql=" UPDATE user_details set des_3='$des_3' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_name))
  {
     $sql=" UPDATE user_details set skill_1='$skill_name' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_per))
  {
     $sql=" UPDATE user_details set skill_1_per='$skill_per' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_name_2))
  {
     $sql=" UPDATE user_details set skill_2='$skill_name_2' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_per_2))
  {
     $sql=" UPDATE user_details set skill_2_per='$skill_per_2' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_name_3))
  {
     $sql=" UPDATE user_details set skill_3='$skill_name_3' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($skill_per_3))
  {
     $sql=" UPDATE user_details set skill_3_per='$skill_per_3' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  if(!empty($profile_pic_path))
  {
     $sql=" UPDATE user_details set profile_pic_path='$profile_pic_path' where rollno='$rollno'";
     $res=mysqli_query($conn,$sql);
  }
  header("location: ..\profile\profile.php   ");
  ?>