
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="path/to/sweetalert2.min.css">

    <!-- Include SweetAlert JavaScript -->
    <script src="path/to/sweetalert2.min.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form method="POST" action="login.php" class="sign-in-form">
        <h2 class="title">Sign in</h2>

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="uname" placeholder="Username" />
      </div>

    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" />
    </div>

    <input type="submit" name="submit" value="Login" class="btn solid">
    

    
            <a href="forget.php">Forget Password</a> 
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

            <form action="signup-check.php" method="post" class="sign-up-form">
              
            <h2 class="title">Sign up</h2>

              <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
       	        <?php } ?>

              <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name" required><br>
          <?php }?>
            </div>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name" required><br>
          <?php }?>
            </div>



            <div class="input-field">
              <i class="fas fa-lock"></i>
             <input type="password" 
                 name="password" 
                 placeholder="Password" required><br>
            </div>


            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password" required><br>
            </div>


            <input type="submit" name="submit2" class="btn" value="Sign up" />
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
    
  </body>
</html>
