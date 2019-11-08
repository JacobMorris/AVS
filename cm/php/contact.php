<?php
if(isset($_GET['action'])){
  if($_GET['action'] == 'success'){
     $error = "<div style='color:red;'>Your changes have been saved!</div><br/>";
  }
}
$contact = GetDBData("SELECT PageText FROM Information where PageTitle = 'contact';");
$context = implode("|", $contact[0]);

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
$error = "";
   if($_POST["contacttext"] == ""){
   $error = $error . "You must enter some sort of text!<br/>";
   }
  if($error == ""){
       $contactsql = "UPDATE Information SET PageText = " . TrustedString($_POST["contacttext"]) . " WHERE PageTitle = 'contact';";
       ExecuteQuery($contactsql);

       echo "<script type='text/javascript'> document.location = 'contact.php?action=success'; </script>";
  }
}
?>