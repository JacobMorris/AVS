<?php
$html = "";
if(isset($_GET['action'])){
  if($_GET['action'] == 'success'){
     $html = "<div style='color:red;'>Your changes have been saved!</div><br/>";
  }
}
$clients = GetDBData("SELECT ClientNo, Title FROM Clients;");
for($t = 0; $t < count($clients); $t++){
$client = explode("|", implode("|", $clients[$t]));
$html = $html . "<div><a href='clients-edit.php?id=" . $client[0] . "'>" . $client[1] . "</a></div>";
}
echo $html;
?>