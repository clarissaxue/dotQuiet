<?php 

    $path = "../../";
    $title = "Lesson 3";

    include $path."assets/php/header.php";

?>

<div id="body">
        
        <!-- each div represents a module for the entire lesson-->
    <div>
        <h2>Lesson 3</h2>
        level 3:
        locate
        ssh
        
        <h3>locate</h3>
        
        <p>
            The examples provided up to this point have used relatively uncrowded file systems, in reality, your operating system will become crowded very quickly with programs, media, and other files.  One rememdy to this problem is the "locate" command, which displays all files that satisfy your criteria and their locations.  The "locate" command pairs well with wildcards, allowing a Linux user to locate all files of a certain type (example: "locate *.txt" or "locate *.pdf" ).
        </p>
        
        <p>
            (Will display directory contents on entry to page)<br>
            contents: TBD
            
            
            commands required: <br>
            locate "*.txt" <br>
            
            Terminal:
            (displays all textfiles in system)
            
            Additional comments:
            Adding the option "-n" followed by a number to your "locate" call will display until your number is reached. 
        </p>
        
        
       <h3>ssh</h3>
        
        <p>
            Collaborative system are an essental part of nearly all computing environments today.  Servers can be accessed through the "ssh" (Secure Shell) command, allowing users to interact with files on another system (in this case, a server).  Server access often requires authentication (with a username and password), example: "ssh dotquiet.org" may require a username and password and will grant you access to the server if valid.<br><br>
            Your username can also be specified by including it in the ssh command: "ssh username@dotquiet.org"
        </p>
        
        <p>
            commands required:
            ssh dotQuiet.org<br>
            
            Additional comment (displays on the text field apart from the terminal):<br>
            The text before the cursor now displays what server you're connected to, in this case, dotQuiet.org.
            
            locate "lesson3.txt"<br>
        </p>
        
    </div>
    
<?php
    
    include $path."assets/php/footer.php";
    
?>