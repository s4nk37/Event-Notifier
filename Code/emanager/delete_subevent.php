<?php
 include("../config.php");

 //getting id of the data from url
$sub_id = $_GET['sub_id'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM subevent WHERE sub_id=$sub_id");
 
//redirecting to the display page (index.php in our case)
header("Location:subdata.php");
?>