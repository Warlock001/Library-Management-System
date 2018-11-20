 <?php
   include("dbConnect.php");
   session_start();
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($con,"SELECT usrname FROM userinfo WHERE usrname = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['usrname'];
   if(!isset($_SESSION['login_user'])){
      header("location:home.html");
   }
?>
