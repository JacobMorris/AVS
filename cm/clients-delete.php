<?php
include("../phpfunctions.php");

$sql = "DELETE FROM Clients WHERE ClientNo = " . $_GET["id"] . ";";
ExecuteQuery($sql);
   echo "<script type='text/javascript'> document.location = 'clients.php?action=success'; </script>";

?>