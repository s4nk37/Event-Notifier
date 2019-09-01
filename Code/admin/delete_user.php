<?php
 include("../config.php");

 //getting id of the data from url
$u_id = $_GET['u_id'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM users WHERE u_id=$u_id");
 
//redirecting to the display page (index.php in our case)
header("Location:userdata.php");
?>