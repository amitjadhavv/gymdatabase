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

<h2>Trainer  registration</h2>
<div class="container">
<form   action="tracon.php" method="POST">  
 <div class="row">
      <div class="col-25">
        <label for="tname">tname</label>
      </div>
      <div class="col-75">
        <input type="text" id="tname" name="tname" placeholder="enter trainer name.." pattern="\a{2,}" title="enter valid name">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="age">age</label>
      </div>
      <div class="col-75">
        <input type="text" id="age" name="age" placeholder="age.."  pattern="\d{2}" title="enter valid age">
      </div>
    </div>

  
    <div class="row">
      <div class="col-25">
        <label for="phone">phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" placeholder="phone number.."  pattern="\d{10}" title="enter valid phone number">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="gender">gender</label>
      </div>
      <div class="col-75">
        <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other

      </div>
    </div>

 <div class="row">
      <div class="col-25">
        <label for="specs">specialization</label>
      </div>
      <div class="col-75">
        <select id="specs" name="specs">
        <option value="select trainer">select specialization</option>
         <option value="aesthetics">aesthetics</option>
          <option value="calisthenics">calisthenics</option>
          <option value="yoga">yoga</option>
           <option value="zumbba">zumbba</option>
        </select>
      </div>
    </div>

 <div class="row">
      <div class="col-25">
        <label for="address">address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="address.."   title="enter valid address">
      </div>
    </div>

<div class="row">
      <div class="col-25">
        <label for="gname">gym name</label>
      </div>
      <div class="col-75">
        <select id="gname" name="gname">
        <option value="select gym">select gym</option>
         <option value="elite fitness,bommanahalli">elite fitness,bommanahalli</option>
          <option value="elite fitness,jayanagar">elite fitness,jayanagar</option>
        
        </select>
      </div>
    </div>

  <a href="home.php" class="back">&laquo; back</a>
</div>
<input type="submit" value="submit">
</form>

</body>
</html>
