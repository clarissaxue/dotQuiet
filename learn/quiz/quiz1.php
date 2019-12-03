<?php 

    $path = "../../";
    $title = "Quiz 1";

    include($path."assets/php/header.php");

?>
<div id="wrapper">
		 
		<div class="quiz">
        
            
			<form id="quiz" action="" method="get" class="form" name="quiz" onsubmit="quiz_check(1);">
			    <h1>Quiz</h1>

			    	<br>
			    	<p>How will you print the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc1_1" name="one"/> ls</label>
			    		<label for="choice2"><input type="radio" id="mc1_2" name="one"/> cd</label>
			    		<label for="choice3"><input type="radio" id="mc1_3" name="one"/> pwd</label>
			    		<label for="choice4"><input type="radio" id="mc1_4" name="one"/> man</label>
				    	
			  		<br>
                
                    <br>
			    	<p>How will you list the content of the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc2_1" name="two"/> ls</label>
			    		<label for="choice2"><input type="radio" id="mc2_2" name="two"/> cd</label>
			    		<label for="choice3"><input type="radio" id="mc2_3" name="two"/> pwd</label>
			    		<label for="choice4"><input type="radio" id="mc2_4" name="two"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you create a new directory current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc3_1" name="three"/> rmdir</label>
			    		<label for="choice2"><input type="radio" id="mc3_2" name="three"/> cd</label>
			    		<label for="choice3"><input type="radio" id="mc3_3" name="three"/> man</label>
			    		<label for="choice4"><input type="radio" id="mc3_4" name="three"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you remove a directory from the current working directory? </p>
			    		<label for="choice1"><input type="radio" id="mc4_1" name="four"/> rmdir</label>
			    		<label for="choice2"><input type="radio" id="mc4_2" name="four"/> cd</label>
			    		<label for="choice3"><input type="radio" id="mc4_3" name="four"/> clear</label>
			    		<label for="choice4"><input type="radio" id="mc4_4" name="four"/> mkdir</label>
			  		<br>
                
                    <br>
			    	<p>How will you look at the user manual? </p>
			    		<label for="choice1"><input type="radio" id="mc5_1" name="five"/> man</label>
			    		<label for="choice2"><input type="radio" id="mc5_2" name="five"/> clear</label>
			    		<label for="choice3"><input type="radio" id="mc5_3" name="five"/> help</label>
			    		<label for="choice4"><input type="radio" id="mc5_4" name="five"/> mkdir</label>
			  		<br>	
                
			  		<br>
                    <button class="button" onsubmit="quiz_check(1);">Click</button>
                    <br>
			</form>
		</div>
</div>

<?php

    include $path."assets/php/footer.php";

?>