<?php
$clients = GetDBData("Select Title, Link, ImageSource From Clients;");
$html = "";
for($t = 0; $t< count($clients); $t++){
$clientArray = (explode("|",implode("|" ,$clients[$t])));
//start the row, add two images, then end the row
   if($t % 2 == 0){
      $html = $html . "<div class='row clientrow'>";
   }
   
   $html = $html . "<div class='col-xs-12 col-sm-6'>" . 
           "<img src='images/clients/" . $clientArray[2] . "' class='img img-responsive' />" .
           "<br/><a href='" . $clientArray[1] . "' target='_blank'>" . 
           $clientArray[0] . "</a></div>";



   if($t % 2 == 1){
      $html = $html . "</div>";
   }
}
//This is a fix in case the number of clients is odd.
if(count($clients) % 2 == 1){
$html = $html . "<div class='col-xs-12 col-sm-6'></div></div>";
}
echo $html;
?>