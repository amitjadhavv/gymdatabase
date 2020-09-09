<!DOCTYPE html>
<html>
<head>
  <title>succesfully registered</title>
<style>
  body {
    background-image:url("1.png");
     background-repeat: no-repeat;
     background-size: 100% 520%;
  font-family:Comic Sans MS, Comic Sans, cursive;
}

.header {
  color: firebrick;
  padding: 20px;
  text-align: center;
}

.sidenav {
  width: 330px;
  position: fixed;
  top: 100px;
  left: 10px;
  padding: 8px 0;
   background-color: black;
}


.sidenav a:hover {
  color: white;
}

.main {
  margin-left: 40px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

li a {
  display: block;
  color: white;
  padding: 30px 30px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  color: white;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
}
</style>
</head>
<body>	
		
	<div class="header">
  <h1>GYM</h1>
    <h2>trainer registered successfully</h2>

  </div>
<div class="sidenav">
  <li><a href="home.php">Home</a></li>
  <div class="dropdown">
 <li><a href="">New Registration</a></li>
  <div class="dropdown-content">
       <li><a href="newreg.php">customer</a></li>
          <li><a href="trainer.php">trainer</a></li>

  </div>
</div>
 
   <li><a href="members.php">Members</a></li>
  
<li><a href="payments.php">Payments</a></li>
  <li><a href="index.php">Logout</a></li>


</div>
</body>
</html>
