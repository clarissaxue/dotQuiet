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
    

</div>

<?php

    include $path."assets/php/footer.php";

?>