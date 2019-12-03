<?php
	session_name("dotQuiet");
	session_start();

	//check to see if entered a username and password
	if(!empty($_POST['user']) && !empty($_POST['pass'])) {
		//connect to the database
		include "../../../../dotQuietConn.php";
        
		//create the query
		$stmt = $conn->prepare("SELECT pass FROM users WHERE user=?");

		//bind the ? to a value
		$stmt->bind_param("s",$_POST['name']);

		//execute it (run the query)
		$stmt->execute();

		//bind the result to a variable
		$stmt->bind_result($res);  //$res will contain a password from the row
		$stmt->fetch();	//now $res is the password for the first row

		//check again what they entered
		if(password_verify($_POST['pass'],$res)) {
			//save information to the session
			$_SESSION['login'] = true;
			$_SESSION['name'] = $_POST['name'];
			header('Location: homepage.php'); //send user to the next page
		} else {
			$errMsg = "Invalid password or username";
		}
	}
?>