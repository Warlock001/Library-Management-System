<?php
   include("dbConnect.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($con,$_POST['name']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $sql = "SELECT id FROM userinfo WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      $usrtyp = "SELECT usrtype FROM userinfo WHERE name = '$myusername' and password = '$mypassword'";
      $usrtype = mysqli_query($con,$usrtyp);
      
      if($count == 1) 
      {
         $_SESSION['login_user'] = $myusername;
         if($usrtype == 1)
         {
            header("location: adminhome.html");
         }
         else
         {
            header("location: studhome.html");
         }
      }

      else 
      {
         header( "location: login_failed.php");
      }
   }
?>
