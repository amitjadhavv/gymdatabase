<?php
$conn= new mysqli('localhost','root','','gym1');
if ($conn->connect_error)
{
	die('connection failed : '.$conn->connect_error);
}
$username = $_POST['uname'];
$password = $_POST['psw'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
 $r=mysqli_fetch_array($result);
    if ($r['username']==$username && $r['password']==$password) {
      echo include('home.php');
    }
    else{
        $_SESSION['message'] = '<span style="color:red;font-weight:bold"><wrong id or password</span>';
 
    	echo include('index.php');
    }


mysqli_free_result($result);
$conn->close();
?>
