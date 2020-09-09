<?php
$conn= new mysqli('localhost','root','','gym1');
if ($conn->connect_error)
{
  die('connection failed : '.$conn->connect_error);
}
if(isset($_POST['search']))
{
  $val=$_POST['search'];
 $sql = "SELECT c.*,t.tname  FROM customer c,trainer t where c.fname='$val' and c.tid=t.tid"; 
}
else{
$sql = "SELECT c.*,t.tname  FROM customer c,trainer t where c.tid=t.tid ";
}
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body {
  background-image: url("1.png");
     background-repeat: no-repeat;
     background-size: 100% 100%;
     background-attachment: fixed;
  font-family:Comic Sans MS, Comic Sans, cursive;
}

.header {
  color: firebrick;
  padding: 20px;
  text-align: center;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 10px;
  width: 100px;
  background-color: black;
}

li a {
  display: block;
  color: white;
  padding: 10px 10px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: grey;
  color:white ;
}
.button input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 32px 64px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}



 td,th {
  border: 1px solid #ddd;
  padding: 8px;
}



tr:hover {background-color: ##91EAFB;}
td {
  color: white;
  
}
th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: center;
  color:#FFA07A;
}
/* Add a black background color to the top navigation bar */
body {
  margin: 0;
}


.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

  
</style>
</head>
<body>  
    
   
  <div class="header">
  <h1>GYM</h1>
  </div>
 <div class="topnav">
           <div class="search-container">
          <form action="members.php" method="POST">

      <input type="text" name="search" placeholder="Search.." >
      <button type="submit"><i class="fa fa-search"></i></button>
    
  </form>
  </div>
</div>


  <ul>
    <li><a href="home.php" class="button"> home</a></li>
  </ul>
    

  <table align="center" border="1px">
    <tr>
      <th colspan="11"><h2>Customer Details</h2></th>
    </tr>
  <t>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Phone no</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Trainer</th>
    <th>Fees Due</th>
    <th>Due Date</th>
    <th colspan="2">Action</th>
  
  </t>
  <?php
   while($row = $result->fetch_assoc()) 
   {
    ?>    
    <tr>
    <td><?php echo $row['cid']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['tname']; ?></td>
    <td><?php echo $row['due']; ?></td>
    <td va><?php echo $row['duedate']; ?></td>
    <?php echo "<td><a href=\"edit.php?id=".$row['cid']."\" style=\"color:red\">Edit</a></td>";?>
   <?php echo "<td><a href=\"deletemem.php?id=".$row['cid']."\" style=\"color:red\">Delete</a></td>";?>

   </tr>
   <?php 
  }
   ?>
</table>

</body>
</html>
