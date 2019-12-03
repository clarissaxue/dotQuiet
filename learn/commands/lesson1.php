<?php 

    $path = "../../";
    $title = "Lesson 1";

    include $path."assets/php/header2.php";

?>
<div id="wrapper">
  <div id="body">
    
    <!--sections are divided by headers that list the commands-->
    <!--Terminal functionality will require a JavaScript backend-->
    <h2>Lesson 1</h2>
        
        
    <h3>pwd</h3>
    <p>
        The Linux terminal begins at the root directory, denoted with a slash (/), and works its way down to subdirectories.
        Try typing "pwd" (print working directory) in the terminal to see which directory you're in!
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
        /dotQuiet/lesson1/
    </p>
    
    <h3>ls</h3>
    <p>
        While keeping track of what directory we're in is important, we need to know where we are going and what we can do in the current directory. The  "ls" command allows us to list out the contents of the current directory, including files and other subdirectories (usually marked by different colors in modern terminals).
        Try typing "ls" into the terminal to <strong>list</strong> the contents of the current directory!
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
        dir1 dir2 dir3 welcome.txt
        
        Additional comments (that display off the terminal in the lesson section):
        The current directory has three directories (in "color1") and a text file "welcome.txt" (in "color2")
    </p>
    
    <h3>cd</h3>
    <p>
        To change to a sub-directory of the current directory, we can use "cd" (change directory) command followed by a space and the name of the directory you want to change to (ex: cd dir1) (Tip: two dots (..) represents the directory above the one you're in, one dot (.) represents the directory you're currently in).
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
        (nothing)  
    </p>
    
    <h3>cd pt. 2 (may not need its own header, could be removed in final version)</h3>
    
    <p>
        Don't worry, you did it right.  Sometimes the terminal displays nothing, this usually indicates that something happened behind the scenes, the terminal  will warn you when something isn't right.
        
        Type "pwd" again to see that you changed to the right directory.
    </p>
        
    <p>
        Terminal result:
        /dotQuiet/lesson1/(dir entered from before)/
    </p>
    
    <h3>mkdir</h3>
    <p>
        You're well on your way to Linux mastery! You can make your own directories by typing "mkdir" followed by a space and the name of your new directory (tip: directory and file names with spaces must be separated by backslashes or wrapped in quotes.  Ex: birds\ of\ the\ world, "the island of hawaii.pdf").
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
    </p>
    
    <h3>mkdir pt. 2 (may not need its own label, could be excluded from final version)</h3>
    
    <p>
        Type "ls" to see the new directory you made!
    </p>
    
    <p>
        Terminal Result (displayed after typing the correct answer):
        (name of the new directory the user made) (other directories or files included in the directory they changed to)
    </p>
    
    <h3>rmdir</h3>
    <p>
        Sometimes its necessary to remove a directory, this is where the "rmdir" (remove directory) command comes in.  You can remove directories in the current directory using "rmdir" followed by a space and the directory name (tip: this only works for directories that are empty, you'll learn more about removing files from directories in Lesson 2 in order to make a directory empty for removal).
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
        (none)
    </p>
    
    <h3>rmdir pt. 2 (may not need its own label)</h3>
    
    <p>
        Type "ls" to see the current directory's contents, the directory you listed in your input should be gone!
    </p>
    
    <p>
        Terminal Result (displayed after typing the correct answer):
        (name of the new directory the user made) (other directories or files included in the directory they changed to, minus the one they removed)
    </p>
    
    <h3>clear</h3>
    <p>
        Working in the terminal produces a lot of text feedback, type "clear" at any time to remove all command history.  Any changes you made to the file structure will stay, this command is simply refresh the display.
    </p>
    
    
    <p>
        Terminal Result (displayed after typing correct answer):
        (session restart)
    </p>
    
    <h3>man</h3>
    
    <p>
        If you ever find yourself lost while using the terminal, you can always look to the <strong>manual.</strong> Try typing "man" to see a list of commands and their uses. 
    </p>
    
    <p>
        Terminal Result (displayed after typing the correct answer):
        (manual)
    </p>
    
    </div>

<?php

    include $path."assets/php/footer.php";

?>