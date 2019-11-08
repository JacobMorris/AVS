<?php
$resourceid = $_GET['id'];
if($resourceid != "NEW"){
$resources = GetDBData("SELECT Text, Link FROM Resources where ResourceID = " . $resourceid . ";");
$resource = explode("|", implode("|", $resources[0]));
$currreso = $resource[0];
$currresotext = $resource[0];
$currresolink = $resource[1];
$delete = "<a href='resources-delete.php?id=" . $resourceid . "'><input type='button' name='delete' value='delete' class='btn btn-danger' /></a>";
} else{
$currreso = "New Resource";
}
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
$error = "";
   if($_POST["resourcetext"] == ""){
   $error = $error . "You must enter a the text the user will see!<br/>";
   }
   if($_POST["resourcelink"] == ""){
   $error = $error . "You must enter a url the user will be directed to!<br/>";
   }
  if($error == ""){
    if($resourceid != "NEW"){
       $resosql = "UPDATE Resources SET Text = " . Safestring($_POST["resourcetext"]) . ", Link = " . Safestring($_POST["resourcelink"]) . " WHERE ResourceID =" . $resourceid . ";";
       ExecuteQuery($resosql);
    } else{
      $resosql = "INSERT INTO Resources (Text, Link) VALUES (" . Safestring($_POST["resourcetext"]) . ", " . Safestring($_POST["resourcelink"]) . ");";
      ExecuteQuery($resosql);
    }
   echo "<script type='text/javascript'> document.location = 'resources.php?action=success'; </script>";
  }
}
?>