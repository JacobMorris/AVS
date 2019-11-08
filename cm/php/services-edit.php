<?php
$serviceno = $_GET['id'];
if($serviceno != "NEW"){
$services = GetDBData("SELECT Title, Description FROM Services where ServiceNo = " . $serviceno . ";");
$service = explode("|", implode("|", $services[0]));
$currserv = $service[0];
$currservtitle = $service[0];
$currservdesc = $service[1];
$delete = "<a href='services-delete.php?id=" . $serviceno . "'><input type='button' name='delete' value='delete' class='btn btn-danger' /></a>";
} else{
$currserv = "New Service";
}
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
$error = "";
   if($_POST["servicetitle"] == ""){
   $error = $error . "You must enter a title!<br/>";
   }
   if($_POST["servicedesc"] == ""){
   $error = $error . "You must enter a description!<br/>";
   }
  if($error == ""){
    if($serviceno != "NEW"){
       $servsql = "UPDATE Services SET Title = " . Safestring($_POST["servicetitle"]) . ", Description = " . Safestring($_POST["servicedesc"]) . " WHERE ServiceNo =" . $serviceno . ";";
       ExecuteQuery($servsql);
    } else{
      $servsql = "INSERT INTO Services (Title, Description) VALUES (" . Safestring($_POST["servicetitle"]) . ", " . Safestring($_POST["servicedesc"]) . ");";
      ExecuteQuery($servsql);
    }
   echo "<script type='text/javascript'> document.location = 'services.php?action=success'; </script>";
  }
}
?>