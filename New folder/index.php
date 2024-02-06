<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div id="container">
  <div class="container sign-up-mode">
  
    <div id="form">
    
    
      <div class="forms-container">
        <div class="signin-signup">
          <!--<form method="POST" action="login.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Password" />
            </div>
          <a href="dashbaord/dash.php" style="text-decoration:none" input type="submit" name="submit" value="Login" class="btn solid">Login</a>
-->
<form method="POST" action="login.php" class="sign-in-form" onsubmit="return isvalid(this);">
    <h2 class="title">Sign in</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="user" placeholder="Email" />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="pass" placeholder="Password" />
    </div>
    <input type="submit" name="submit" value="Login" class="btn solid">

            <a href="#">Forget Password</a> 
            <br><br><br>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          </div>
          
          <form method="post" action="register.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Firstname" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Lastname" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
               <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              By signing in or creating an account, you agree with our Terms & conditions and Privacy statement
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Register
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Feel the online experience</h3>
            <p>
              By signing in or creating an account, you agree with our Terms & conditions and Privacy statement
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    

    <script src="app.js"></script>
    <script>
    function isvalid(form)
     {
             /*var user=document.form.user.value;
             var pass=document.form.pass.value;

             if(user.length=="" && pass.length==""){
               alert("Username and Password Empty");
               return false

             }
            else{
              if(user.length==""){
               alert("Username is Empty");
               return false
              }
              if(pass.length==""){
               alert("Password is Empty");
               return false
              }
            }*/
            var user = form.user.value;
        var pass = form.pass.value;

        if (user.length === 0 && pass.length === 0) {
            alert("Username and Password Empty");
            return false;
        } else {
            if (user.length === 0) {
                alert("Username is Empty");
                return false;
            }
            if (pass.length === 0) {
                alert("Password is Empty");
                return false; 
     }
    }
    return true;
  }
    </script>
  </body>
</html>
