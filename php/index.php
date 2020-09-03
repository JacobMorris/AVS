<?php
//for carousel

$clients = GetDBData("Select Title, Link, ImageSource, SlideIndex From Clients;");
$datatarget="";
$carouselimage = "";
$image_route = "../images/clients/";
for($t = 0; $t< count($clients); $t++){
   $clientArray = (explode("|",implode("|" ,$clients[$t])));

   $carouselimage = $carouselimage . "<div class='carousel-item'>" .
                                    "<div class='carousel-container'>" .
                                    "<h2 class='animated fadeInDown'>" .
                                    $clientArray[0] . "</h2>" .
                                    "<p class='animated fadeInUp'>" .
                                    "<img src='" . $image_route . $clientArray[2] . "'" .
                                    " class='img img-fluid' /></p></div></div>";
}
?>
