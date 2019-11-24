<?php 

    $path = "../../";
    $title = "Quiz 2";

    include $path."assets/php/header.php";

?>


    <div class="quiz">
        <form action="" method="get" class="form">
            <h1>Quiz</h1>

                <br>
                <p>How will you change permissions of a file? </p>
                    <label for="choice1"><input type="radio" id="choice1" name="mc"/> chmod</label>
                    <label for="choice2"><input type="radio" id="choice2" name="mc"/> mv</label>
                    <label for="choice3"><input type="radio" id="choice3" name="mc"/> chown</label>
                    <label for="choice4"><input type="radio" id="choice4" name="mc"/> rm</label>
                <br>

                <br>
                <p>How will you create a new file in current working directory? </p>
                    <label for="choice1"><input type="radio" id="choice1" name="mc"/> touch</label>
                    <label for="choice2"><input type="radio" id="choice2" name="mc"/> mv</label>
                    <label for="choice3"><input type="radio" id="choice3" name="mc"/> man</label>
                    <label for="choice4"><input type="radio" id="choice4" name="mc"/> mkdir</label>
                <br>

                <br>
                <p>How will you remove a file from the current working directory? </p>
                    <label for="choice1"><input type="radio" id="choice1" name="mc"/> rmdir</label>
                    <label for="choice2"><input type="radio" id="choice2" name="mc"/> rm</label>
                    <label for="choice3"><input type="radio" id="choice3" name="mc"/> clear</label>
                    <label for="choice4"><input type="radio" id="choice4" name="mc"/> touch </label>
                <br>

                <br>
                <p>How will you move a file from the current working directory? </p>
                    <label for="choice1"><input type="radio" id="choice1" name="mc"/> mv</label>
                    <label for="choice2"><input type="radio" id="choice2" name="mc"/> rm</label>
                    <label for="choice3"><input type="radio" id="choice3" name="mc"/> mkdir</label>
                    <label for="choice4"><input type="radio" id="choice4" name="mc"/> touch </label>
                <br>

                <br>
                <p>Which one of the following is a wild card? </p>
                    <label for="choice1"><input type="radio" id="choice1" name="mc"/> *</label>
                    <label for="choice2"><input type="radio" id="choice2" name="mc"/> #</label>
                    <label for="choice3"><input type="radio" id="choice3" name="mc"/> @</label>
                    <label for="choice4"><input type="radio" id="choice4" name="mc"/> $</label>
                <br>


                <br><input type="submit" class="button" value="Send"/>



        </form>
    </div>

<?php

    include $path."assets/php/footer.php";

?>