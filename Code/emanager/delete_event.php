<?php
 include("../config.php");

 //getting id of the data from url
$e_id = $_GET['e_id'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM eventlist WHERE e_id=$e_id");
 
//redirecting to the display page (index.php in our case)
header("Location:edata.php");
?>