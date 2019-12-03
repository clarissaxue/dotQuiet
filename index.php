<?php
		// for any page you want to use same session in, have to use same name & session start()
    session_name("dotQuiet"); // session name should be a unique name
    session_start();
  
    // make sure not logged in before user can access page
    if ($_SESSION['login']) {
      header("Location: homepage.php"); // user logged in, redirect to homepage
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Learn Linux</title>
  </head>
  <body>

    <div class="header">
        <div class="logo">
            <img src="dotQuietlogo.png" width="230"alt="logo">
        </div>
    </div>
      
    <div id="welcome-wrapper">
            <div class="row">
                <div class="large" id="welcome">
                    <h1>Welcome to Learn Linux!</h1>
                    <p id="welcome-text"><span class="blue-text">Sign up</span> to get started or log in to continue from where you left off!</p>
                </div>
            
                <div class="form-area">
                    <div class="form-user" id="login-form">
                        <form action="/action_page.php">
                            <h2>Sign Up</h2>
                
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required>
                  
                            <label for="pass"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" required>

                            <label for="pass2"><b>Re-Type Password</b></label>
                            <input type="password" placeholder="Enter Password Again" name="pass2" required>
                            
                            <div id="user-buttons">
                                <button type="login" class="main-button">Create Account</button>
                                <button type="button" class="other-button" onclick="">Log In</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        
            <div class="bottom" id="footer">
                <p>&#x24B8;Copyright 2019 Group dotQuiet</p>
            </div>
        </div>
</div>

<script src="assets/js/login.js"></script>
</body>
</html>