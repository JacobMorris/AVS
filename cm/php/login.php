<?php
include("../phpfunctions.php");
$error = "";
if ($_GET['login'] == 'false'){
$error = "<div style='color:red;'>Invalid Username or Password.</div>";
}

if(isset($_SESSION["user"])){
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
echo "running";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $return = GetDBData("SELECT * FROM Users WHERE username = " . Safestring($username) . " AND password = " . Safestring($password) . ";");
 if($return != ""){
   $_SESSION["user"] = $username;
   echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
   } else{
      echo "<script type='text/javascript'> document.location = 'login.php?login=false'; </script>";
   }
}

?>