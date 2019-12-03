<?php
	// for any page you want to use same session in, have to use same name & session start()
	session_name("dotQuiet"); // session name should be a unique name
	session_start();

	// make sure logged in before user can access page
	if (!$_SESSION['login']) {
		header("Location: index.php"); // user not logged in, redirect to login page
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Learn Linux</title>
  </head>
  <body>
    <div class="header">
			<div class="logo">
				<img src="assets/imgs/dotQuietlogo.png" width="230"alt="logo">
			</div>

			<div class="navbar">
				<a href="home">home</a>
				<a href="home">learn</a>
				<a href="home">history</a>
				<a href="home">sources</a>
      </div>
      
      <!-- Login Form -->
      <button class="open-button" onclick="openForm()" id="login">Login</button>

      <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>Log In</h1>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="login" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>

      <!-- Register Form -->
      <button class="register-button" onclick="openForm()" id="login">Register</button>

    </div>

<!-- // Login Form -->
<div id="wrapper">
  <div id="logo">
    <div class="verticalWrapper">
      <nav class="vertical">
        <ul>
          <li>
            <label id="intro" for="intro"><a href="#">Introduction</a></label>
            <input type="radio" id="intro" />
          </li>
          <li>
            <label for="commands">Lessons</label>
            <input type="radio" id="commands" />
            <div>
              <ul>
                <li><a href="#">Easy</a></li>
                <li><a href="#">Medium</a></li>
                <li><a href="#">Hard</a></li>
              </ul>
            </div>
          </li>
          <li>
            <label for="quizzes">Quizzes</label>
            <input type="radio" id="quizzes" />
            <div>
              <ul>
                <li><a href="#">Quiz</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div id="body">
    
    <h2>Overview</h2>
    <p>
        Linux is an Operating System (OS) that was created in the 1990s under the vision that computing should be open-source and accessible to everyone.  Its influence is far reaching, powering the software of phones, appliances, and supercomputers alike.
    </p>
    
    <p>
        Unlike other operating systems that require purchase and restrict the user from customizing their experience, Linux is free to use, but requires a fair amount of computing knowledge to use effectively.  The Linux terminal, or shell, is the starting point for interacting with Linux and can intimidate new users with its text-only interface, luckily, this site offers a smooth introduction.
    </p>
    
    <h2>Site Purpose</h2>
    <p>
        This site will instruct users on how to use the Linux shell to manipulate files and file structure for their own purposes.  The skills you acquire here can also be extended beyond Linux into other computing environments that use shell commands.  Additionally, the site will provide information on Linux's history and an overview of popular, present-day distributions.
    </p>
    
    <!--Links to introduction on file structure-->
    <a href="learn/introduction/intro.html">Start Learning >></a>
    
    </div>

  <div id="footer">
      <p>&#x24B8;Copyright 2019 Group dotQuiet</p>
  </div>
  </div>

  <script src="assets/js/login.js"></script>
  </body>
</html>