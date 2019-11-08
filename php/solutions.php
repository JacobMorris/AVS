<?php
$information = GetDBData("Select PageText From Information WHERE PageTitle = 'Solutions';");

echo "<p>" . implode("|",$information[0]) . "</p>";
?>