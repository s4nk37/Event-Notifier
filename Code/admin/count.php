<?php


// $sql = "SELECT * FROM users";
// if ($result=mysqli_query($link, $sql)){
// $rowcount = mysqli_num_rows($result);
// mysqli_free_result($result);
// return $result;}
// echo "$result";

//$result = mysqli_query($link, "SELECT * FROM users");
// $q1="SELECT * FROM users";
//  $e1=$link->query($q1);
//   $rowcount = mysqli_num_rows($e1);

//   function total_num_users(){
  	include("../config.php");
//   $sql = "SELECT * FROM users";
//   $result = mysqli_query($link,$sql);
//   $count = mysqli_num_rows($result);
//   return $count; 

// }

$sql = "select COUNT(u_id) from users";
$result = mysqli_query($link, $sql) or die ("Query error!");


while ($row = mysqli_fetch_array($result)) {

    $var = $row['COUNT(u_id)'];

    echo "There are currently " .$var. " users.";

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
</body>
</html>
