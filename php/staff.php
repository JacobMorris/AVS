<?php
$positions = GetDBData("SELECT PositionNo, Title FROM Positions ORDER BY SortOrder;");

$html = "";
for($t=0;$t < count($positions);$t++){
   $positionArray = (explode("|",implode("|" ,$positions[$t])));
   
   $html = $html . "<h3 style='text-decoration:underline;'>" .
                    $positionArray[1] . "</h3>";
   
   $employees = GetDBData("SELECT StaffNo, Name, Description, Email FROM Staff" . 
                          " WHERE PositionNo = " . 
                          $positionArray[0] . " ORDER BY SortOrder;");

   for($i=0;$i < count($employees);$i++){
      $employeeArray = (explode("|",implode("|" ,$employees[$i])));
      $html = $html . "<div style='font-weight:bold;'>" . 
              "<a href='mailto:" . $employeeArray[3] . "'>" . 
              $employeeArray[1] . "</a></div><p>" . 
              $employeeArray[2] . "</p>";

     $accomplishments = GetDBData("SELECT Accomplishment FROM Accomplishments " . 
                                  "WHERE StaffNo=" . 
                                  "$employeeArray[0]" . " ORDER BY SortOrder;");
     if($accomplishments != ""){
        $html = $html . "<div>Accomplishments:</div><br/><ul>";
        
       for($e=0;$e<count($accomplishments);$e++){
          $html = $html . "<li>" . implode("|" ,$accomplishments[$e]) . "</li>";
       }
  
        $html = $html . "</ul>";
     }

     $html = $html . "<br/><br/>";
   }
   $html = $html . "<br/><br/>";
}
echo $html;
?>