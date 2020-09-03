<?php
$clients = GetDBData("Select Title, Link, ImageSource From Clients;");
$html = "";
$image_base = "../images/clients/";
for($t = 0; $t< count($clients); $t++){
$clientArray = (explode("|",implode("|" ,$clients[$t])));
   
   $html = $html . "<div class='col-lg-4 col-md-6 filter-web'>" .
           "<div class='portfolio-item'>" .
           "<img src='" . $image_base . $clientArray[2] . "' class='img img-fluid' />" .
           "<div class='portfolio-info'>" .
           "<h3><a href='" . $image_base . $clientArray[2] . "' data-gall='portfolioGallery'" .
           " class='venobox' title='" . $clientArray[0] . "'>" . $clientArray[0] . "</a></h3>" .
           "<a href='" . $image_base . $clientArray[2] . "' data-gall='portfolioGallery'" .
           " class='venobox' title='" . $clientArray[0] . "'><i class='icofont-plus'></i></a>" .
           "</div></div></div>";
}

echo $html;
?>
