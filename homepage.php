<<<<<<< HEAD
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
          <img src="dotQuietlogo.png" width="230"alt="logo" onclick="toHomepage();">
			</div>

      <ul class="navbar">
          <li><a href="#">Home</a></li>
          <li><a href="#">Learn</a>
            <ul>
              <li><a href="#">Introduction</a></li>
              <li><a href="#">Lessons</a>
                <ul>
                  <li><a href="#">Easy</a></li>
                  <li><a href="#">Medium</a></li>
                  <li><a href="#">Hard</a></li>
                </ul>
              </li>
              <li><a href="#">Quizzes</a>
                <ul>
                  <li><a href="#">Quiz#1</a></li>
                  <li><a href="#">Quiz#2</a></li>
                  <li><a href="#">Quiz#3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">History</a></li>
          <li><a href="#">Sources</a></li>
          <button class="logout-button">Logout</button>
        </ul>
    </div>

=======
<?php 

    $path = "./";
    $title = "Homepage";

    include $path."assets/php/header.php";

?>
<div id="wrapper">
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
    <a href="learn/introduction/intro.php">Start Learning >></a>
    
    </div>


<?php

    include $path."assets/php/footer.php";

?>
>>>>>>> 13ed92ff282177335ebf608203a25ebdd9aae599
