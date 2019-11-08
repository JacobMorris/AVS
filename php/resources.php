<?php
$resources = GetDBData("Select Link, Text From Resources;");
$html = "";
for($t = 0; $t< count($resources); $t++){
$resourceArray = (explode("|",implode("|" ,$resources[$t])));
$html = $html . "<li>" . 
"<a href='" . $resourceArray[0] . "' target='_blank'>" . $resourceArray[1] . "</a>" .
"</li>";
}
echo $html;
?>