<?php
$conn= new mysqli('localhost','root','','gym1');
if ($conn->connect_error)
{
	die('connection failed : '.$conn->connect_error);
}
$id= $_GET['id'];
mysqli_query($conn,"DELETE FROM customer where cid=$id");
mysqli_close($conn);
header("Location: members.php");
?>
