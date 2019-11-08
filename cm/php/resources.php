<?php
$html = "";
if(isset($_GET['action'])){
  if($_GET['action'] == 'success'){
     $html = "<div style='color:red;'>Your changes have been saved!</div><br/>";
  }
}
$resources = GetDBData("SELECT ResourceID, Text FROM Resources;");
for($t = 0; $t < count($resources); $t++){
$resource = explode("|", implode("|", $resources[$t]));
$html = $html . "<div><a href='resources-edit.php?id=" . $resource[0] . "'>" . $resource[1] . "</a></div>";
}
echo $html;
?>