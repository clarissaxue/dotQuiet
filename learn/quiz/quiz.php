<?php 

    $path = "../../";
    $title = "Quiz Template";

    include $path."assets/php/header2.php";

?>
	<div id="wrapper">
	  <div id="body">
			<form action="" method="get" class="form">
				<h2>Quiz</h2>
					<p>this is question one</p>
					<textarea name="ta">please type your answer here.</textarea>
				
						<br>
					<p>Select/option menu</p>
					<select name="selection">
						<option value="">--Please choose one-- ▼</option>
						<option value="opt1"> Option 1 </option>
						<option value="opt2"> Option 2 </option>
					</select>

					<br>
					<p>Multiple Choice</p>
						<label for="choice1"><input type="radio" id="choice1" name="mc"/> Choice 1</label>
						<label for="choice2"><input type="radio" id="choice2" name="mc"/> Choice 2</label>
						<label for="choice3"><input type="radio" id="choice3" name="mc"/> Choice 3</label>
						<label for="choice4"><input type="radio" id="choice4" name="mc"/> Choice 4</label>
						
						<br>
						<p>Checkboxes for Multiple Options</p>
							<label for="check1"><input type="checkbox" id="check1" name="check1"/> Checkbox 1</label>
							<label for="check2"><input type="checkbox" id="check2" name="check2"/> Checkbox 2</label>
							<label for="check3"><input type="checkbox" id="check3" name="check3"/> Checkbox 3</label>
							<label for="check4"><input type="checkbox" id="check4" name="check4"/> Checkbox 4</label>
							<label for="check5"><input type="checkbox" id="check5" name="check5"/> Checkbox 5</label>
					
					
						<br><input type="submit" class="button" value="Send"/>

					
				
			</form>
        </div>
		
		
<?php

    include $path."assets/php/footer.php";

?>