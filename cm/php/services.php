<?php
$html = "";
if(isset($_GET['action'])){
  if($_GET['action'] == 'success'){
     $html = "<div style='color:red;'>Your changes have been saved!</div><br/>";
  }
}
$services = GetDBData("SELECT ServiceNo, Title FROM Services;");
for($t = 0; $t < count($services); $t++){
$service = explode("|", implode("|", $services[$t]));
$html = $html . "<div><a href='services-edit.php?id=" . $service[0] . "'>" . $service[1] . "</a></div>";
}
echo $html;
?>