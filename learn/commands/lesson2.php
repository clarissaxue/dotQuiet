<?php 

    $path = "../../";
    $title = "Lesson 2";

    include $path."assets/php/header.php";

?>

<div id="body">
        
        <!-- each div represents a module for the entire lesson-->
    <div>
    
        <h2>Lesson 2</h2>
        
        <p><strong>start this lesson with the contents of the directory (/dotQuiet/lesson2) listed. ls result: books letters 'song lyrics'</strong></p>
        
        
        <h3>touch</h3>
        <p>
            So far we've covered how to move through, make, and remove directories, but we have no way of populating those directories with files.  This is where "touch" comes in, creating a file with the name listed after the command.  Try creating a file using the terminal (Tip: use an extension like ".txt" on the end of your file's name so other programs can open it).
        </p>
        
        
        <p>
            Terminal Result (displayed after typing correct answer, will automatically "use ls"):
            books letters 'song lyrics' (name of the file created by "touch")
            
        </p>
        
        <p>
            Additional comments:
            See your file with the directories from before?  Pretty neat, right?
        </p>
        
        <h3>rm</h3>
        <p>
            Your computer could get pretty cluttered if there were no way to remove files, this is where the "rm" (remove) command comes in, list the name of the file directly after the "rm" command to remove it.
        </p>
        
        
        <p>
            Terminal Result (displayed after typing correct answer, will automatically "use ls"):
            books letters 'song lyrics'
        </p>
        
        <p>
            Additional comments:
            See ya!  Your file is no more, good thing we didn't add anything important to it.
        </p>
        
        <h3>mv</h3>
        
        <p>
            Moving files to their appropriate folders is equally important to making them, the "mv" (move) command helps us accomplish this.  Files can be moved to a specified directory like this: mv [file] [directory].<br><br>
            Renaming files with the terminal also uses the "mv" command, as long as there is no conflict between file names and directories are not confused for files.  Use the "mv" command like this to rename a file: mv [file] [new filename].
            
            <br>(for backend programmers: this requires the user to use "cd books" and "mv 'The Shining.pdf' ..")
        </p>
        
        
        <p>
            Terminal Result of changing directories (displayed after typing correct answer, will automatically "use ls"):
            'I Know Why the Caged Bird Sings.pdf' 'The Hobbit.pdf' 'The Shining.pdf'<br>
            
            Terminal Result of moving 'The Shining.pdf', will automatically "use ls":
            'I Know Why the Caged Bird Sings.pdf' 'The Hobbit.pdf'
        </p>
        
        <p>
            Additional comments:
            As you can see, the pdf you moved is no longer there, change directories with ".." to confirm that the file moved.
        </p>
        
        <p>
            Terminal Result of changing directories (displayed after typing correct answer, will automatically "use ls"):
            books letters 'song lyrics' 'The Shining.pdf'
        </p>
        
        <h3>mv pt. 2 (sectio can be excluded, it was moved up)</h3>
        
        <p>
            Renaming files with the terminal also uses mv, as long as there is no conflict between file names and directories are not confused for files.  Move to the "letters" directory and change the name of 'Recommendation Letter.txt' to 'Final Recommendation Letter.txt' (Hint: mv (current file name) (new file name)).
        </p>
        
        
        <p>
            Terminal Result of changing directories (displayed after typing correct answer, will automatically "use ls"):
            'Mother\'s Day.txt' 'Recommendation Letter.txt'<br>
            
            Terminal Result of renaming (displayed after typing correct answer, will automatically "use ls"):
            'Final Recommendation Letter.txt' 'Mother\'s Day.txt'<br>
        </p>
        
        <h3>chmod</h3>
        
        <p>
            Directories and files can have their permissions changed through the Linux terminal.  This is useful for collaborative computing environments where one has to restrict or allow access to certain files.  Typing "ls -l" allows us to see all of the permission codes and details of the files in our system.<br><br>
            The 10 character string that begins each line resulting from "ls -l" shows us the permissions of each file or directory.  The "d" or "-" at the beginning indicates a directory or file respectively and each grouping of three letters shows us 1: the owner, 2: group, and 3: global access of reading (r), writing (w) or executing (x), where a letter indicates permission and a dash (-) indicates no permission.<br><br>
            These permissions are changed using numbers in what is called an "octal mode" that adds permission numbers at each bit.  This detail is beyond the scope of this lesson, but further reading can be found <a href="https://www.astro.princeton.edu/docs/chmod#Octal_modes">here.</a>
        </p>
        
        <p>
            commands required:
            cd ../'song lyrics' or cd .. \ cd 'song lyrics'
            ls -l
            
            Terminal
            drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) pop
            drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) rock
            -r-xr-xr-x dotQuiet dotQuiet (size) (timestamp) 'Amazing Grace.txt'
        </p>
        
        <h3>chmod cont. (moved to previous section)</h3>
        
        <p>
            The 10 character string that begins each line resulting from "ls -l" shows us the permissions of each file or directory.  The "d" or "-" at the beginning indicates a directory or file respectively and each grouping of three letters shows us 1: the owner, 2: group, and 3: global access of reading (r), writing (w) or executing (x), where a letter indicates permission and a dash (-) indicates no permission.  We use "chmod" (change mode) with a 3 digit number to update permissions where the digits indicate the permissions of the owner, group, and all other users (global).<br>
            
            Type chmod 'Amazing Grace.txt' 755 then view the new permissions with ls -l.
        </p>
        
        <p>
            commands required: <br>
            chmod 'Amazing Grace.txt' <br>
            ls -l <br>
            
            Terminal:
            drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) pop
            drwxr-xr-x dotQuiet dotQuiet (size) (timestamp) rock
            -rwxr-xr-x dotQuiet dotQuiet (size) (timestamp) 'Amazing Grace.txt'
            
            Additional comments:
            The "w" is now present for owners of 'Amazing Grace.txt', you could change the lyrics using a text editor if you wanted to.
        </p>
        
        
       <h3>wildcards (*)</h3>
        
        <p>
            The Linux terminal can do some powerful things with very few characters.  One good example of this fact are wildcards, operators added to commands that select all files that fulfill certain requirements.  The wildcard we will look at is "*", which when followed or preceded by a string of characters, selects files that end or start with that string, example: "rm [start of string]*" or "rm *[end of string]", a command that removes all files that start or end with a certain set of characters.
        </p>
        
        <p>
            commands required:
            cd rock<br>
            ls (or ls -l)<br>
            (contents: 'The Beatles - I Am The Walrus.txt' 'The Beatles - Hey Jude.txt' 'The Beatles - Strawberry Fields Forever.txt' 'The Doors - Light My Fire.txt' 'The Doors - The End.txt')<br>
            
            rm "The Beatles"* 
            
            
            Terminal:
            (display contents once all files are removed)<br>
            'The Doors - Light My Fire.txt' 'The Doors - The End.txt'
        </p>
        
    </div>

<?php

    include $path."assets/php/footer.php";

?>