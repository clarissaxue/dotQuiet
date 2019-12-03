<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="author" content="dotQuiet">
  
  <link href="<?php echo $path; ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="header2">
        <div class="logo2">
            <img src="<?php echo $path; ?>dotQuietlogo.png" width="230" alt="logo" onclick="toHomepage();">
        </div>

        <ul class="navbar2">
            <li><a href="<?php echo $path; ?>homepage.php">Home</a></li>
            <li><a href="#">Learn</a>
              <ul>
                <li><a href="<?php echo $path; ?>learn/introduction/intro.php">Introduction</a></li>
                <li><a href="#">Lessons</a>
                  <ul>
                    <li><a href="<?php echo $path; ?>learn/commands/lesson1.php">Easy</a></li>
                    <li><a href="<?php echo $path; ?>learn/commands/lesson2.php">Medium</a></li>
                    <li><a href="<?php echo $path; ?>learn/commands/lesson3.php">Hard</a></li>
                  </ul>
                </li>
                <li><a href="#">Quizzes</a>
                  <ul>
                    <li><a href="<?php echo $path; ?>learn/quiz/quiz1.php">Quiz#1</a></li>
                    <li><a href="<?php echo $path; ?>learn/quiz/quiz2.php">Quiz#2</a></li>
                    <li><a href="<?php echo $path; ?>learn/quiz/final_quiz.php">Quiz#3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo $path; ?>history/history.php">History</a></li>
            <li><a href="<?php echo $path; ?>sources/sources.php">Sources</a></li>
            <li><button class="logout-button">Logout</button></li>
          </ul>
      </div>
              
    
    <!--Mobile Menu-->
    <span id="mobileMenuIcon" onclick="openNav()">
        <img src="<?php echo $path; ?>assets/media/images/menu-icon.png" alt="open menu"/>
    </span>

    <div id="mobileMenu" class="mobileMenu" style="width:0;">
        <div id="innerMobileMenu">

            <span class="close" onclick="closeNav()">
                <img src="<?php echo $path; ?>assets/media/images/close-icon.png" alt="close menu"/>
            </span>

            <a href="<?php echo $path; ?>homepage.php">Home</a>
            
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
                            <a href="<?php echo $path; ?>learn/quiz/quiz1.php">Quiz#1</a>
                        </li>

                        <li>
                            <a href="<?php echo $path; ?>learn/quiz/quiz2.php">Quiz#2</a>
                        </li>

                        <li>
                            <a href="<?php echo $path; ?>quiz/final_quiz.php">Quiz#3</a>
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
    