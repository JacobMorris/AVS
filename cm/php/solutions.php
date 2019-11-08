<?php
if(isset($_GET['action'])){
  if($_GET['action'] == 'success'){
     $error = "<div style='color:red;'>Your changes have been saved!</div><br/>";
  }
}
$solutions = GetDBData("SELECT PageText FROM Information where PageTitle = 'Solutions';");
$soltext = implode("|", $solutions[0]);

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
$error = "";
   if($_POST["solutiontext"] == ""){
   $error = $error . "You must enter some sort of text!<br/>";
   }
  if($error == ""){
       $solutionsql = "UPDATE Information SET PageText = " . TrustedString($_POST["solutiontext"]) . " WHERE PageTitle = 'Solutions';";
       ExecuteQuery($solutionsql);

       echo "<script type='text/javascript'> document.location = 'solutions.php?action=success'; </script>";
  }
}
?>