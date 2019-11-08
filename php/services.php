<?php
$services = GetDBData("Select Title, Description From Services");
$html = "";
for($t = 0; $t< count($services); $t++){
$serviceArray = (explode("|",implode("|" ,$services[$t])));
$html = $html . "<div class='panel panel-default'>" .
    "<div class='panel-heading'>" .
      "<h4 class='panel-title'>" .
        "<a data-toggle='collapse' data-parent='#accordion' href='#collapse" . $t . "'>" . $serviceArray[0] . "</a>" .
      "</h4>" .
    "</div>" .
    "<div id='collapse" . $t . "' class='panel-collapse collapse'>" .
      "<div class='panel-body'><p>" . $serviceArray[1] . "</p></div>" .
    "</div>" .
  "</div>";
}
echo $html;
?>