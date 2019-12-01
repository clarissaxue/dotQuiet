<?php 

    $path = "../../";
    $title = "Final Quiz";

    include $path."assets/php/header.php";

?>

<div id="body">
    
    <h2>Question 1</h2>
    <p>While using your Linux machine, you discover that you've lost track of a crucial file that contains a secret recipe for Hawaiian pizza.  You'd like to delete it, hoping to keep it from being released to the public by committing it to memory.  You remember that the file is in a directory called "recipes", starts with "HP", and is a ".txt" file.  Which commands should you use from the list below in order to delete this secret recipe file. (Hint: they will be in order from top to bottom)</p>
    
    <form>
        <label for="choice1"><input type="checkbox" id="choice1" name="mc"/>cd recipe/</label>
        <label for="choice2"><input type="checkbox" id="choice2" name="mc"/>dc recipes</label>
        <label for="choice3"><input type="checkbox" id="choice3" name="mc"/>cd recipes/</label>
        <label for="choice4"><input type="checkbox" id="choice4" name="mc"/>rm *.txt</label>
        <label for="choice5"><input type="checkbox" id="choice5" name="mc"/>mv *.txt</label>
        <label for="choice6"><input type="checkbox" id="choice6" name="mc"/>rm HP*.txt</label>
        <label for="choice7"><input type="checkbox" id="choice7" name="mc"/>rmdir HP.txt</label>
        <label for="choice8"><input type="checkbox" id="choice8" name="mc"/>rm HP</label>
    </form>


    <h2>Question 2</h2>
    <p>You are the worker at a small tech store. One day you boss informs you that the payroll system he has created allows employees to write and execute their wage information inside the "wage.xlxs" file. Not only this, but their files are located in the wrong directory (currently in food). To solve this issue, he asks that you change the file permissions for global and group users to read-only and asks that you move the file into the "wages" directory which is above it by two folder levels.</p>

    <form>
        <label for="choice1"><input type="checkbox" id="choice1" name="mc"/>cd food</label>
        <label for="choice2"><input type="checkbox" id="choice2" name="mc"/>cp foods</label>
        <label for="choice3"><input type="checkbox" id="choice3" name="mc"/>cmod 755 wages.xlxs</label>
        <label for="choice4"><input type="checkbox" id="choice4" name="mc"/>chmod 555 wages.txt</label>
        <label for="choice5"><input type="checkbox" id="choice5" name="mc"/>chmod 644 wages.xlxs</label>
        <label for="choice6"><input type="checkbox" id="choice6" name="mc"/>mv wages.xlxs ../../</label>
        <label for="choice7"><input type="checkbox" id="choice7" name="mc"/>move wages.xlxs ../../</label>
        <label for="choice8"><input type="checkbox" id="choice8" name="mc"/>mc wages.xlxs ../</label>
    </form>


    <h2>Question 3</h2>
    <p>You are at a technical interview for a company who is adamant its employees understand Linux. You are asked by the interviewer to demonstrate you abilities in the following ways. Locate a file ending in the word "test" that has the .txt extention (assume the mlocate database is up to date). Then, create a directory in the directory of that found file called "done" and inside that new directory create a file called "answer.txt".</p>

    <form>
        <label for="choice1"><input type="checkbox" id="choice1" name="mc"/>locate "*test.txt"</label>
        <label for="choice2"><input type="checkbox" id="choice2" name="mc"/>find test.txt</label>
        <label for="choice3"><input type="checkbox" id="choice3" name="mc"/>locate "*.txt"</label>
        <label for="choice4"><input type="checkbox" id="choice4" name="mc"/>cp *FOUND PATH*</label>
        <label for="choice5"><input type="checkbox" id="choice5" name="mc"/>dc *FOUND PATH*</label>
        <label for="choice6"><input type="checkbox" id="choice6" name="mc"/>cd *FOUND PATH* </label>
        <label for="choice7"><input type="checkbox" id="choice7" name="mc"/>mkdir done</label>
        <label for="choice8"><input type="checkbox" id="choice8" name="mc"/>mir done</label>
        <label for="choice9"><input type="checkbox" id="choice9" name="mc"/>makedirectory done</label>
        <label for="choice10"><input type="checkbox" id="choice10" name="mc"/>file "answer.txt"</label>
        <label for="choice11"><input type="checkbox" id="choice11" name="mc"/>touchfile answer.txt</label>
        <label for="choice12"><input type="checkbox" id="choice12" name="mc"/>touch answer.txt</label>
    </form>

</div>

<?php

    include $path."assets/php/footer.php";

?>