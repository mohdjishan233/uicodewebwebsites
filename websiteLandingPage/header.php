<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/designstyle.css">
</head>
<body>
<div class="contener">
  <div class="header">
        <h1>UiCodeWeb</h1>
        <div class="menu">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
          <div class="icone">
            <i id="bar" class="fas fa-bars"></i>
          </div>
          <div class="loginbtn">
            <button type="button" class="accbtn">Account</button>
            <div class="dropdwon">
              <li><button type="button" onclick="openspopup()" class="signbtn">Sign In</button></li>
              <li><button type="button" onclick="openspopupsignup()" class="accbtn">Sign Up</button></li>
            </div>
          </div>
        </div>
  </div>
  <style>
   
  </style>
  <div class="form" id="popup">
  <form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="imges/websiteImage/img_avatar.png" alt="" srcset="" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required id="inputd">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="inputd">
        
    <button id="loginbtn" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button"onclick="closepopup()" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<!-- Sign up form -->
  </div>
  <div class="form1" id="popupsign">
  <form action="/action_page.php" method="post">
  <h1 id="formh1">Sign Up Form</h1>
  <div class="container">
     <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required id="inputd">

    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required id="inputd">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="inputd">

    <label for="uname"><b>Phone No</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required id="inputd">
        
    <button id="loginbtn" type="submit">Sign Up</button>
  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button"onclick="closepopupsignup()" class="cancelbtn">Cancel</button>
  </div>
</form>
</div>
</div>
<script>
  const popup=document.getElementById("popup");
  function openspopup(){
  popup.classList.add("openpopup");
  }
  function closepopup(){
    popup.classList.remove("openpopup");
  }
  const popup1=document.getElementById("popupsign");
  function openspopupsignup(){
  popup1.classList.add("openpopup1");
  }
  function closepopupsignup(){
    popup1.classList.remove("openpopup1");
  }
</script>
</body>
</html>