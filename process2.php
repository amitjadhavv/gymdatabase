<?php
$link= new mysqli('localhost','root','','gym1');
if ($link->connect_error)
{
	die('connection failed : '.$link->connect_error);
}
$tname =  mysqli_real_escape_string($link, $_REQUEST['trainer']);
$que = "SELECT tid FROM trainer WHERE tname='$tname'";

$result = mysqli_query($link, $que) or die(mysqli_error($link));
 $r=mysqli_fetch_array($result);
 $tid=$r['tid'];
 $cid =  mysqli_real_escape_string($link, $_REQUEST['cid']);
$fname =  mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname =  mysqli_real_escape_string($link, $_REQUEST['lname']);
$age =  mysqli_real_escape_string($link, $_REQUEST['age']);
$address= mysqli_real_escape_string($link, $_REQUEST['address']);
$phone= mysqli_real_escape_string($link, $_REQUEST['phone']);
$height =  mysqli_real_escape_string($link, $_REQUEST['height']);
$weight =  mysqli_real_escape_string($link, $_REQUEST['weight']);
$chest= mysqli_real_escape_string($link, $_REQUEST['chest']);
$waist= mysqli_real_escape_string($link, $_REQUEST['waist']);
$bicep= mysqli_real_escape_string($link, $_REQUEST['bicep']);
$package =  mysqli_real_escape_string($link, $_REQUEST['package']);
$fees =  mysqli_real_escape_string($link, $_REQUEST['fees']);
$due= mysqli_real_escape_string($link, $_REQUEST['due']);
$startdate = mysqli_real_escape_string($link, $_REQUEST['startdate']);
$duedate= mysqli_real_escape_string($link, $_REQUEST['duedate']);
$query = "UPDATE customer SET fname='$fname',lname='$lname',age=$age,phone=$phone,address='$address',height=$height,weight=$weight,chest=$chest,waist=$waist,bicep=$bicep,fees=$fees,due=$due,startdate='$startdate',duedate='$duedate' WHERE cid=$cid";
if(mysqli_query($link, $query)){
   echo include("succ.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
$link->close();
?>
