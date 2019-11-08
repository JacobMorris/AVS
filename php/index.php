<?php
//for text at top of page
$information = GetDBData("Select PageText From Information WHERE PageTitle = 'index';");
$toptext = implode("|",$information[0]);



//for carousel

$clients = GetDBData("Select Title, Link, ImageSource, SlideIndex From Clients;");
$datatarget="";
$carouselimage = "";
for($t = 0; $t< count($clients); $t++){
   $clientArray = (explode("|",implode("|" ,$clients[$t])));

   $datatarget = $datatarget . "<li data-target='#myCarousel' data-slide-to='" . 
   $clientArray[3] . "' ";

   $carouselimage = $carouselimage . "<div class='item";

   if($t == 0){
      $datatarget = $datatarget . "class='active' ";
      $carouselimage = $carouselimage . " active";
   }

   $datatarget = $datatarget . "></li>";
   
   $carouselimage = $carouselimage . "'>" . 
                    "<a href='" . $clientArray[1] . "' target='_blank'>" .
                    "<img src='images/clients/" . $clientArray[2] . "' class='center-image'" . 
                    " alt='" . $clientArray[0] . "' /></a>" .
                    "</div>";
   
}
?>