<?php 

    $path = "../../";
    $title = "Final Quiz";

    include $path."assets/php/header.php";

?>

<div id="body">
    
    <h2>Question 1</h2>
    <p>While using your Linux machine, you discover that you've lost track of a crucial file that contains a secret recipe for Hawaiian pizza.  You'd like to delete it, hoping to keep it from being released to the public by committing it to memory.  You remember that the file is in a directory called "recipes", starts with "HP", and is a ".txt" file.  Which commands should you use from the list below in order to delete this secret recipe file. (Hint: they will be in order from top to bottom)</p>
    
    <form>
        <label for="choice1_1"><input type="checkbox" id="choice1_1" name="mc"/>cd recipe/</label>
        <label for="choice1_2"><input type="checkbox" id="choice1_2" name="mc"/>dc recipes</label>
        <label for="choice1_3"><input type="checkbox" id="choice1_3" name="mc"/>cd recipes/</label>
        <label for="choice1_4"><input type="checkbox" id="choice1_4" name="mc"/>rm *.txt</label>
        <label for="choice1_5"><input type="checkbox" id="choice1_5" name="mc"/>mv *.txt</label>
        <label for="choice1_6"><input type="checkbox" id="choice1_6" name="mc"/>rm HP*.txt</label>
        <label for="choice1_7"><input type="checkbox" id="choice1_7" name="mc"/>rmdir HP.txt</label>
        <label for="choice1_8"><input type="checkbox" id="choice1_8" name="mc"/>rm HP</label>   
    </form>


    <h2>Question 2</h2>
    <p>You are a worker at a small tech store. One day you boss informs you that the payroll system he has created allows employees to write and execute their wage information inside a "wage.xlxs" file. Not only this, but their files are located in the wrong directory (currently in food). To solve this issue, he asks that you change the file permissions for the global and group users to read-only and asks that you move the file into the "wages" directory which is above it by two folder levels.</p>

    <form>
        <label for="choice2_1"><input type="checkbox" id="choice2_1" name="mc"/>cd food</label>
        <label for="choice2_2"><input type="checkbox" id="choice2_2" name="mc"/>cp foods</label>
        <label for="choice2_3"><input type="checkbox" id="choice2_3" name="mc"/>cmod 755 wages.xlxs</label>
        <label for="choice2_4"><input type="checkbox" id="choice2_4" name="mc"/>chmod 555 wages.txt</label>
        <label for="choice2_5"><input type="checkbox" id="choice2_5" name="mc"/>chmod 644 wages.xlxs</label>
        <label for="choice2_6"><input type="checkbox" id="choice2_6" name="mc"/>mv wages.xlxs ../../</label>
        <label for="choice2_7"><input type="checkbox" id="choice2_7" name="mc"/>move wages.xlxs ../../</label>
        <label for="choice2_8"><input type="checkbox" id="choice2_8" name="mc"/>mc wages.xlxs ../</label>
    </form>


    <h2>Question 3</h2>
    <p>You are at a technical interview for a company who is adamant about its employees understanding Linux. You are asked by the interviewer to demonstrate your abilities in the following ways. Locate a file ending in the word "test" that has the .txt extention (assume the locate database is up to date). Then, create a directory in the directory of that found file called "done" and inside that new directory create a file called "answer.txt".</p>

    <form>
        <label for="choice3_1"><input type="checkbox" id="choice3_1" name="mc"/>locate "*test.txt"</label>
        <label for="choice3_2"><input type="checkbox" id="choice3_2" name="mc"/>find test.txt</label>
        <label for="choice3_3"><input type="checkbox" id="choice3_3" name="mc"/>locate "*.txt"</label>
        <label for="choice3_4"><input type="checkbox" id="choice3_4" name="mc"/>cp *FOUND PATH*</label>
        <label for="choice3_5"><input type="checkbox" id="choice3_5" name="mc"/>dc *FOUND PATH*</label>
        <label for="choice3_6"><input type="checkbox" id="choice3_6" name="mc"/>cd *FOUND PATH* </label>
        <label for="choice3_7"><input type="checkbox" id="choice3_7" name="mc"/>mkdir done</label>
        <label for="choice3_8"><input type="checkbox" id="choice3_8" name="mc"/>mir done</label>
        <label for="choice3_9"><input type="checkbox" id="choice3_9" name="mc"/>makedirectory done</label>
        <label for="choice3_10"><input type="checkbox" id="choice3_10" name="mc"/>file "answer.txt"</label>
        <label for="choice3_11"><input type="checkbox" id="choice3_11" name="mc"/>touchfile answer.txt</label>
        <label for="choice3_12"><input type="checkbox" id="choice3_12" name="mc"/>touch answer.txt</label>
    </form>

</div>

<?php

    include $path."assets/php/footer.php";

?>