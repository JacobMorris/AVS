<?php
include("../phpfunctions.php");

$sql = "DELETE FROM Services WHERE ServiceNo = " . $_GET["id"] . ";";
ExecuteQuery($sql);
   echo "<script type='text/javascript'> document.location = 'services.php?action=success'; </script>";
?>