<?php
$services = GetDBData("Select Title, Description From Services");
$html = "";
for($t = 0; $t< count($services); $t++){
    $serviceArray = (explode("|",implode("|" ,$services[$t])));


    $html = $html . "<div class='col-md-6 d-flex align-items-stretch' data-aos='fade-up'>" .
                     "<div id='" . $serviceArray[0] . "' class='card'>" .
                      "<div class='card-body'>" .
                       "<h5 class='card-title'><a href='#'>" . $serviceArray[0] . "</a></h5>" .
                       "<p class='card-text'>" . $serviceArray[1] . "</p>" .
                      "</div>" .
                     "</div>" .
                    "</div>";

}
echo $html;
?>
