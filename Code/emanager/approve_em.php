<?php
 include("../config.php");

 //getting id of the data from url
$em_tmpid = $_GET['em_tmpid'];
 
//deleting the row from table
// $result = mysqli_query($link, "DELETE FROM eventmanager_temp WHERE em_tmpid=$em_tmpid");
$result = mysqli_query($link,"INSERT INTO eventmanager (`c_name`, `c_city`, `em_name`, `em_password`, `em_cno`, `em_email`)
SELECT `c_name`, `c_city`, `em_name`, `em_password`, `em_cno`, `em_email`
FROM eventmanager_temp
WHERE em_tmpid=$em_tmpid");
$q="DELETE FROM eventmanager_temp WHERE em_tmpid=$em_tmpid";
$e=$link->query($q);
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>