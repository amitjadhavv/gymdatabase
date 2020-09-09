<?php
$conn= new mysqli('localhost','root','','gym1');
if ($conn->connect_error)
{
  die('connection failed : '.$conn->connect_error);
}
  $val=$_GET['id'];
 $sql = "SELECT *  FROM customer where cid=$val"; 
$result = $conn->query($sql);
$r=mysqli_fetch_array($result);
$conn->close();
?>
<!DOCTYPE html>
<html>
<title>new registration</title>

<head>
<style>
  body {
   background-image:url("https://wallpaperplay.com/walls/full/6/6/3/32714.jpg");
     background-repeat: no-repeat;
     background-size: 100% 130%;
  font-family:Comic Sans MS, Comic Sans, cursive;
}

* {
  box-sizing: border-box;
}

h2{
  color: white;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.back {
  background-color: green;
  color: black;
  padding: 8px 16px;
   border-radius: 8px;
}
.next{
  background-color: green;
  color: black;
  padding: 8px 16px;
  border-radius: 8px;
}
.round {
  border-radius: 50%;
}
-


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: auto;
  }
}
</style>
</head>
<body>

<h2>Edit PROFILE</h2>
<div class="container">
<form   action="process2.php" method="POST">  

<div class="row">
      <div class="col-25">
        <label for="cid">cid</label>
      </div>
      <div class="col-75">
        <input type="number" id="cid" name="cid" value="<?php echo $r['cid'];?>">
      </div>
    </div>


 <div class="row">
      <div class="col-25">
        <label for="fname">First name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" value="<?php echo $r['fname'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="lname">Last name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" value="<?php echo $r['lname'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
        <input type="number" id="age" name="age"value="<?php echo $r['age'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="number" id="phone" name="phone" value="<?php echo $r['phone'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" value="<?php echo $r['address'];?>">
      </div>
    </div>
 <div class="row">
      <div class="col-25">
        <label for="height">height</label>
      </div>
      <div class="col-75">
        <input type="number" id="height" name="height" value="<?php echo $r['height'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="weight">weight</label>
      </div>
      <div class="col-75">
        <input type="number" id="weight" name="weight" value="<?php echo $r['weight'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="chest">chest</label>
      </div>
      <div class="col-75">
        <input type="number" id="chest" name="chest" value="<?php echo $r['chest'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="waist">waist</label>
      </div>
      <div class="col-75">
        <input type="number" id="waist" name="waist" value="<?php echo $r['waist'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="bicep">bicep</label>
      </div>
      <div class="col-75">
        <input type="number" id="bicep" name="bicep" value="<?php echo $r['bicep'];?>">
      </div>
    </div> 

 <div class="row">
      <div class="col-25">
        <label for="trainer">trainer</label>
      </div>
      <div class="col-75">
        <select id="trainer" name="trainer">
        <option value="<?php echo $r['trainer'];?>"</option>
         <option value="armugam">armugam</option>
          <option value="arjun">arjun</option>
          <option value="preeti">preeti</option>
           <option value="divya">divya</option>
        </select>
      </div>
    </div>




   
 <div class="row">
      <div class="col-25">
        <label for="package">package</label>
      </div>
      <div class="col-75">
        <select id="package" name="package">
        <option value="<?php echo $r['package'];?>"</option>
         <option value="1 month">1 month</option>
          <option value="3 month">3 months</option>
          <option value="6 months">6 months</option>
           <option value="1 year">1 year</option>
        </select>
      </div>
    </div>


     <div class="row">
      <div class="col-25">
        <label for="fees">fees paid</label>
      </div>
      <div class="col-75">
        <input type="number" id="fees" name="fees" value="<?php echo $r['fees'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="due">fees due</label>
      </div>
      <div class="col-75">
        <input type="number" id="due" name="due" value="<?php echo $r['due'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="startdate">start date</label>
      </div>
      <div class="col-75">
        <input type="date" id="startdate" name="startdate" value="<?php echo $r['startdate'];?>">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="duedate">due date</label>
      </div>
      <div class="col-75">
        <input type="date" id="duedate" name="duedate" value="<?php echo $r['startdate'];?>">
      </div>
    </div>

  <a href="home.php" class="back">&laquo; back</a>
</div>
<input type="submit" value="submit">
</form>

</body>
</html>
