<?php
session_start();
 echo "hi";
 $user=$_POST["username"];
 $pass=$_POST["pass"];

 echo $user;
 echo $pass;
 $conn=mysqli_connect("localhost","root","","alumni");


 $sql="select name,rollno,password from signup where rollno ='$user' and password='$pass'";
 $res=mysqli_query($conn,$sql);
 if(!$res)
    echo mysqli_error($conn);
else  
    {
        $row_count=mysqli_num_rows($res);
        if($row_count==1){
        
          $result1=mysqli_fetch_array($res);
          $_SESSION["name"] = $result1['name'];
          $_SESSION["rollno"] = $result1['rollno'];
          $_SESSION["search"] ="0";
          $_SESSION['batch']="0";
          $_SESSION["dept"]="0";
          header("location: ../home/index.php");
          //echo $_SESSION["name"],$_SESSION["rollno"];
        }
        else 
          echo "denied";
    }


?>