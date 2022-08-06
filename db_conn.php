<?php  

$sname = "localhost:3306";
$uname = "root";
$password = "password";

$db_name = "test";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>
