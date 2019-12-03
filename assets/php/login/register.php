<?php

	if (!empty($_POST['uname']) && !empty($_POST['pass']) && 
	!empty($_POST['pass2']) && passMatch() ) {
			//connect to db
			include "../../../240dbConn.php";

			//probably should make sure uname doesn't already exist in db
			$stmt = $conn->prepare("insert into 240Login (user,pass) values (?,?)");

			$stmt->bind_param("ss",$_POST['user'],
			password_hash($_POST['pass'],PASSWORD_DEFAULT) );

			$stmt->execute();

			$stmt->close();

			header("Location: index.php");
	} else if (!empty($_POST['uname']) && !empty($_POST['pass']) && 
	!empty($_POST['pass2']) && !passMatch() ) {
		echo "<h2> Your password does not match </h2>";
	}

	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Register</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div>
			Password (again):
			<input type="password" name="pass2" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Submit Form" />
		</div>	
	</form>
</body>
</html>
