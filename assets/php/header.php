<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="author" content="dotQuiet">
  
  <link href="<?php echo $path; ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
        <div class="header">
                <div class="logo">
                    <img src="<?php echo $path; ?>dotQuietlogo.png" width="230"alt="logo">
                </div>
    
                <div class="navbar">
                    <a href="<?php echo $path; ?>homepage.php">home</a>
                    <a href="<?php echo $path; ?>learn/introduction/intro.php">learn</a>
                    <a href="<?php echo $path; ?>history/history.php">history</a>
                    <a href="<?php echo $path; ?>sources/sources.php">sources</a>
          </div>
          
          <!-- Login Form -->
          <button class="open-button" onclick="openForm(this)" id="login">Login</button>
    
          <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <h1>Login Your Information</h1>
    
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>
    
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
    
              <button type="login" class="btn">Login</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
          </div>
    
          <!-- Register Form -->
          <button class="register-button" onclick="openForm(this)" id="login">Register</button>
    
          <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <h1>Login Your Information</h1>
    
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>
    
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
    
              <button type="login" class="btn">Login</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
          </div>
            </div>
    
    
    
    
    <script>
    function openForm() 
    {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() 
    {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
    <!-- // Login Form -->
    
    
    <!--Mobile Menu-->
    <span id="mobileMenuIcon" onclick="openNav()">
        <img src="<?php echo $path; ?>assets/media/images/menu-icon.png" alt="open menu"/>
    </span>

    <div id="mobileMenu" class="mobileMenu" style="width:0;">
        <div id="innerMobileMenu">

            <span class="close" onclick="closeNav()">
                <img src="<?php echo $path; ?>assets/media/images/close-icon.png" alt="close menu"/>
            </span>

            <a href="<?php echo $path; ?>index.php">Home</a>
            
            <ul>
                <li>

                    <a onclick="drop_close('learnDropDown')">Learn</a>

                    <ul style="display:none;" class="mobileDropDown" id="learnDropDown">

                        <li>
                            <a href="<?php echo $path; ?>learn/introduction/intro.php">Introduction</a>
                        </li>

                        <li>
                            <a onclick="drop_close('commandsDropDown')">Commands</a>

                            <ul style="display:none;" id="commandsDropDown" class="mobileDropDown">
                                <li>
                                    <a href="<?php echo $path; ?>learn/commands/lesson1.php">Lesson 1</a>
                                </li>

                                <li>
                                    <a href="<?php echo $path; ?>learn/commands/lesson2.php">Lesson 2</a>
                                </li>

                                <li>
                                    <a href="<?php echo $path; ?>learn/commands/lesson3.php">Lesson 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>

                    <a onclick="drop_close('quizDropDown')">Quizzes</a>

                    <ul style="display:none;" class="mobileDropDown" id="quizDropDown">
                        <li>
                            <a href="<?php echo $path; ?>quiz/quiz.php">Quiz Template</a>
                        </li>

                        <li>
                            <a href="<?php echo $path; ?>quiz/quiz1.php">Quiz 1</a>
                        </li>

                        <li>
                            <a href="<?php echo $path; ?>quiz/quiz2.php">Quiz 2</a>
                        </li>
                    </ul>

                </li>

                <li>

                    <a href="<?php echo $path; ?>history/history.php">History</a>

                </li>

                <li>

                    <a href="<?php echo $path; ?>sources/sources.php">Sources</a>

                </li>
            </ul>
        </div>
    </div>
    <!--//Mobile Menu-->
    
    
    <div id="wrapper">
      <div id="logo">
        <div class="verticalWrapper">
          <nav class="vertical">
            <ul>
              <li>
                <label for="intro">Introduction</label>
                <input type="radio" id="intro" />
              </li>
              <li>
                <label for="commands">Commands</label>
                <input type="radio" id="commands" />
              </li>
              <li>
                <label for="quizzes">Quizzes</label>
                <input type="radio" id="quizzes" />
                <div>
                  <ul>
                    <li><a href="#">Quiz #1</a></li>
                    <li><a href="#">Quiz #2</a></li>
                    <li><a href="#">Quiz #3</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
        
    