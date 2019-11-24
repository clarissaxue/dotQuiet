<?php 

    $path = "../../";
    $title = "Quiz 1";

    include $path."assets/php/header.php";

?>


		<div class="quiz">
			<form action="" method="get" class="form">
			    <h1>Quiz</h1>

			    	<br>
			    	<p>How will you print the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="choice1" name="mc"/> ls</label>
			    		<label for="choice2"><input type="radio" id="choice2" name="mc"/> cd</label>
			    		<label for="choice3"><input type="radio" id="choice3" name="mc"/> pwd</label>
			    		<label for="choice4"><input type="radio" id="choice4" name="mc"/> man</label>
				    	
			  		<br>
                
                    <br>
			    	<p>How will you list the content of the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="choice1" name="mc"/> ls</label>
			    		<label for="choice2"><input type="radio" id="choice2" name="mc"/> cd</label>
			    		<label for="choice3"><input type="radio" id="choice3" name="mc"/> pwd</label>
			    		<label for="choice4"><input type="radio" id="choice4" name="mc"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you create a new directory current working directory? </p>
			    		<label for="choice1"><input type="radio" id="choice1" name="mc"/> rmdir</label>
			    		<label for="choice2"><input type="radio" id="choice2" name="mc"/> cd</label>
			    		<label for="choice3"><input type="radio" id="choice3" name="mc"/> man</label>
			    		<label for="choice4"><input type="radio" id="choice4" name="mc"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you remove a directory from the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="choice1" name="mc"/> rmdir</label>
			    		<label for="choice2"><input type="radio" id="choice2" name="mc"/> cd</label>
			    		<label for="choice3"><input type="radio" id="choice3" name="mc"/> clear</label>
			    		<label for="choice4"><input type="radio" id="choice4" name="mc"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you look at the user manual? </p>
			    		<label for="choice1"><input type="radio" id="choice1" name="mc"/> man</label>
			    		<label for="choice2"><input type="radio" id="choice2" name="mc"/> clear</label>
			    		<label for="choice3"><input type="radio" id="choice3" name="mc"/> help</label>
			    		<label for="choice4"><input type="radio" id="choice4" name="mc"/> mkdir</label>
			  		<br>
			    	
					
			  		<br><input type="submit" class="button" value="Send"/>

			        
			    
			</form>
		</div>

<?php

    include $path."assets/php/footer.php";

?>