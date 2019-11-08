<?php
include("../phpfunctions.php");

$sql = "DELETE FROM Resources WHERE ResourceID = " . $_GET["id"] . ";";
ExecuteQuery($sql);
   echo "<script type='text/javascript'> document.location = 'resources.php?action=success'; </script>";
?>