<?php
$link= new mysqli('localhost','root','','gym1');
if ($link->connect_error)
{
	die('connection failed : '.$link->connect_error);
}
$gname = mysqli_real_escape_string($link, $_REQUEST['gname']);
$q = "SELECT gid FROM gym WHERE gname='$gname'";


$result = mysqli_query($link, $q) or die(mysqli_error($link));
 $r=mysqli_fetch_array($result);
 $gid=$r['gid']; 


$tname =  mysqli_real_escape_string($link, $_REQUEST['tname']);
$age =  mysqli_real_escape_string($link, $_REQUEST['age']);
$phone= mysqli_real_escape_string($link, $_REQUEST['phone']);
$gender= mysqli_real_escape_string($link, $_REQUEST['gender']);
$specs =  mysqli_real_escape_string($link, $_REQUEST['specs']);
$address= mysqli_real_escape_string($link, $_REQUEST['address']);
$query = "INSERT INTO trainer(tname,age, phone,gender,specs,address,gid) VALUES ('$tname',$age,$phone,'$gender','$specs','$address',$gid)";
if(mysqli_query($link, $query)){
   echo include("succc.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
$link->close();
?>
