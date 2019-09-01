<?php
 include("../config.php");

 //getting id of the data from url
$em_id = $_GET['em_id'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM eventmanager WHERE em_id=$em_id");
 
//redirecting to the display page (index.php in our case)
header("Location:emdata.php");
?>