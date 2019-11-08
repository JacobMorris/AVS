<?php
$clientno = $_GET['id'];
if($clientno != "NEW"){
$clients = GetDBData("SELECT Title, Link FROM Clients where ClientNo = " . $clientno . ";");
$client = explode("|", implode("|", $clients[0]));
$currclie = $client[0];
$currclietitle = $client[0];
$currclielink = $client[1];
$delete = "<a href='clients-delete.php?id=" . $clientno . "'><input type='button' name='delete' value='delete' class='btn btn-danger' /></a>";
} else{
$currclie = "New Client";
}
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
$error = "";
   if($_POST["clienttitle"] == ""){
   $error = $error . "You must enter the title the user will see!<br/>";
   }
   if($_POST["clientlink"] == ""){
   $error = $error . "You must enter a url the user will be directed to!<br/>";
   }
   if($error == ""){
    if($clientno != "NEW"){
       $cliesql = "UPDATE Clients SET Title = " . Safestring($_POST["clienttitle"]) . ", Link = " . Safestring($_POST["clientlink"]) . " WHERE ClientNo =" . $clientno . ";";
       ExecuteQuery($cliesql);
    } else{
        $lastord = GetDBData("SELECT MAX(SlideIndex) FROM Clients;");
        $client = explode("|", implode("|", $clients[0]));
        $myord = $client[0] + 1;

        //upload file start
        $target_dir = "../images/clients/";
        $target_file = $target_dir . basename($_FILES["clientimage"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["clientimage"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["clientimage"]["name"]). " has been uploaded.";
        }else{
//echo "Not uploaded because of error";
}

        //upload file end


        $cliesql = "INSERT INTO Clients (Title, Link, ImageSource, SlideIndex) VALUES (" . 
         Safestring($_POST["clienttitle"]) . ", " . 
         Safestring($_POST["clientlink"]) . ", " . Safestring($_FILES["clientimage"]["name"]) . ", " . $myord . ");";
      ExecuteQuery($cliesql);
    }
   echo "<script type='text/javascript'> document.location = 'clients.php?action=success'; </script>";
  }
}
?>