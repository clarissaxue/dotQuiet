<?php
	// for any page you want to use same session in, have to use same name & session start()
	session_name("dotQuiet"); // session name should be a unique name
	session_start();

	// make sure logged in before user can access page
	if (!$_SESSION['login']) {
		header("Location: index.php"); // user not logged in, redirect to login page
  } else {
    $path = "../../";
    $title = "Quiz 2";

    include $path."assets/php/header.php";
  }
?>
<div id="wrapper">
    <div class="quiz">
				<form id="quiz" action="" method="get" class="form" name="quiz" onsubmit="quiz_check(2);">
			    <h1>Quiz</h1>
                
                    <br>
			    	<p>How will you change permissions of a file? </p>
			    		<label for="choice1"><input type="radio" id="mc1_1" name="one"/> chmod</label>
			    		<label for="choice2"><input type="radio" id="mc1_2" name="one"/> mv</label>
			    		<label for="choice3"><input type="radio" id="mc1_3" name="one"/> chown</label>
			    		<label for="choice4"><input type="radio" id="mc1_4" name="one"/> rm</label>
			  		<br>
                
                    <br>
			    	<p>How will you create a new file in current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc2_1" name="two"/> touch</label>
			    		<label for="choice2"><input type="radio" id="mc2_2" name="two"/> mv</label>
			    		<label for="choice3"><input type="radio" id="mc2_3" name="two"/> man</label>
			    		<label for="choice4"><input type="radio" id="mc2_4" name="two"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you remove a file from the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc3_1" name="three"/> rmdir</label>
			    		<label for="choice2"><input type="radio" id="mc3_2" name="three"/> rm</label>
			    		<label for="choice3"><input type="radio" id="mc3_3" name="three"/> clear</label>
			    		<label for="choice4"><input type="radio" id="mc3_4" name="three"/> touch </label>
			  		<br>
                
                    <br>
			    	<p>How will you move a file from the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc4_1" name="four"/> mv</label>
			    		<label for="choice2"><input type="radio" id="mc4_2" name="four"/> rm</label>
			    		<label for="choice3"><input type="radio" id="mc4_3" name="four"/> mkdir</label>
			    		<label for="choice4"><input type="radio" id="mc4_4" name="four"/> touch </label>
			  		<br>
                
                    <br>
			    	<p>Which one of the following is a wild card? </p>
			    		<label for="choice1"><input type="radio" id="mc5_1" name="five"/> *</label>
			    		<label for="choice2"><input type="radio" id="mc5_2" name="five"/> #</label>
			    		<label for="choice3"><input type="radio" id="mc5_3" name="five"/> @</label>
			    		<label for="choice4"><input type="radio" id="mc5_4" name="five"/> $</label>
			  		<br>
			    	
					
			  		<br><button class="button" onsubmit="quiz_check(2);">Click</button>
                    <br>

			        
			    
			</form>
		</div>
</div>

<?php

    include $path."assets/php/footer.php";

?>