<?php 

    $path = "../../";
    $title = "Introduction";

    include $path."assets/php/header.php";

?>
<div id="wrapper">
<div id="body">
    
    <h2>File Structure</h2>
    
    <!--Image or diagram showing file structure-->
    <img src="<?php echo $path?>assets/images/unix.png" alt="Unix file structure"/>
    
    <p>
        Linux is organizes files into directories (or folders) that all stem from one root directory.  A directory can have many or no directories beneath it, or contain many or no files.
    </p>
    
    <h2>Command Line Interface</h2>
    
    <!--Image or diagram showing CLI-->
    <img src="<?php echo $path?>assets/images/CLI.png" alt="Command line interface"/>
    
    <p>
        Linux, without any third-party distributions, requires interacting with a terminal through commands to create directories and files.  In some ways, the command line is very fast, as the user never has to lift their hands from the keyboard to interact with their computer, however, achieving this level of expertise requires some practice.
    </p>
    
    <!--Links to first lesson-->
    <a href="../commands/lesson1.php">Try it Out >></a>
    
</div>

<?php

    include $path."assets/php/footer.php";

?>