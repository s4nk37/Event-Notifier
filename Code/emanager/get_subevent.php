<?php
require_once('../config.php');


if(isset($_POST["e_id"]))
{
	$e_id = $_POST['e_id'];
	$subevent_result = mysqli_query($link, "SELECT * FROM subevent WHERE e_id='$e_id'");
	$options = "<option disabled selected>Pick Subevent</option>";
	while($row = $subevent_result->fetch_assoc()) { 
	$options .= "<option value='".$row['sub_id']."'>".$row['sub_name']."</option>";
	
	}
	echo $options;
	
} else 
{
	echo "-1";
}

?>
