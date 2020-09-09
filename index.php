 <!DOCTYPE html>
<html>
<body bgcolor="#a3a3a3">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

 body {
    background-image:url("1.png");
     background-repeat: no-repeat;
     background-size: 100% 100%;
     background-attachment: fixed;
  font-family:Comic Sans MS, Comic Sans, cursive;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #a6a6a6;
  border-radius: 8px;
  box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  }

/* Set a style for all buttons */
button {
  background-color: #999999;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  : center;
}

button:hover {
  opacity: 1;
}

/* Extra styles for the cancel button */
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  position: relative;

}

img.avatar {
  height: 30%
  width: 30%;
  border-radius: 10%;
}

.container {
  padding: 8px;
  color: white;
}

/* The Modal (background) */

/* Modal Content/Box */
.modal-content {
  background:rgba(255,255,255,0.3);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
/* Change styles for span and cancel button on extra small screens */

  .cancelbtn {
     width: 100%;
  } 
}
</style>
</head>
<body>
<div id="frm">
  <form class="modal-content animate"  action="process.php" method="POST">  
  
  
     <div class="imgcontainer">
    
      <img src="avatar.png" alt="Avatar" class="avatar" height="150" width="150">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <?php 
      if (isset($_SESSION['message']))
    {
    ?>
          <span style="color:red;font-weight:bold">wrong id or password</span>
          <?php
    unset($_SESSION['message']);
}
      ?>
    </div>
  </form>
</div>


</body>
</body>
</html>