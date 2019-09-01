<?php
 include("../config.php");

 //getting id of the data from url
$em_tmpid = $_GET['em_tmpid'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM eventmanager_temp WHERE em_tmpid=$em_tmpid");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>