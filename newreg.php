
<?php
$conn= new mysqli('localhost','root','','gym1');
if ($conn->connect_error)
{
  die('connection failed : '.$conn->connect_error);
}
$sql = "SELECT tname  FROM trainer";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html>
<title>new registration</title>

<head>
<style>
  body {
   background-image:url("1.png");
     background-repeat: no-repeat;
     background-size: 100% 100%;
     background-attachment: fixed;
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
  background-color: green;
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
@media screen and (max-width: 300px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: auto;
  }
}
</style>
</head>
<body>

<h2>New registration</h2>
<div class="container">
<form   action="process1.php" method="POST">  
 <div class="row">
      <div class="col-25">
        <label for="fname">First name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="fname.." pattern="\a{2,}" title="enter 0nly alphabet">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="lname">Last name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="lname.." pattern="\a{2,}" title="enter 0nly alphabet">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
        <input type="text" id="age" name="age" placeholder="age.." pattern="\d{2}" title="enter valid age">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" placeholder="phone number.." pattern="\d{10}" title="enter valid phone number">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="address..">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other

      </div>
    </div>

 <div class="row">
      <div class="col-25">
        <label for="height">height</label>
      </div>
      <div class="col-75">
        <input type="text" id="height" name="height" placeholder="height.." pattern="\d{2,}" title="enter valid number">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="weight">weight</label>
      </div>
      <div class="col-75">
        <input type="text" id="weight" name="weight" placeholder="weight.." pattern="\d{2,}" title="enter valid number">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="chest">chest</label>
      </div>
      <div class="col-75">
        <input type="text" id="chest" name="chest" placeholder="chest.." pattern="\d{2,}" title="enter valid number">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="waist">waist</label>
      </div>
      <div class="col-75">
        <input type="text" id="waist" name="waist" placeholder="waist.." pattern="\d{2,}" title="enter valid number">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="bicep">bicep</label>
      </div>
      <div class="col-75">
        <input type="text" id="bicep" name="bicep" placeholder="bicep.." pattern="\d{2,}" title="enter valid number">
      </div>
    </div> 

 <div class="row">
      <div class="col-25">
        <label for="trainer">trainer</label>
      </div>
      <div class="col-75">
        <select id="trainer" name="trainer">
        <option value="select trainer">select trainer</option>
        <?php
   while($row = $result->fetch_assoc()) 
   {
    ?>
         <option value="<?php echo $row['tname']; ?>"><?php echo $row['tname']; ?></option>
         <?php 
  }
   ?>
        </select>
      </div>
    </div>




   
 <div class="row">
      <div class="col-25">
        <label for="package">package</label>
      </div>
      <div class="col-75">
        <select id="package" name="package">
        <option value="choose any">select package</option>
         <option value="1 month">1 month</option>
          <option value="3 months">3 months</option>
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
        <input type="text" id="fees" name="fees" placeholder="enter the amount..">
      </div>
    </div>

  <a href="home.php" class="back">&laquo; back</a>
  <input type="submit" value="submit" align="right">
</div>
</form>

</body>
</html>
