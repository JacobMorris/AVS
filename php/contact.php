<?php
$information = GetDBData("Select PageText From Information WHERE PageTitle = 'contact';");

echo "<p>" . implode("|",$information[0]) . "</p>";
?>