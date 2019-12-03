<?php
	if (!empty($_POST['user']) && !empty($_POST['pass']) && 
	!empty($_POST['pass2']) && passMatch() ) {
			//connect to db
			include "../../../../dotQuietConn.php";

			//probably should make sure user doesn't already exist in db
			$stmt = $conn->prepare("insert into users (user,pass) values (?,?)");

			$stmt->bind_param("ss",$_POST['user'],
			password_hash($_POST['pass'],PASSWORD_DEFAULT) );

			$stmt->execute();

			$stmt->close();

			header("Location: index.php");
	} else if (!empty($_POST['user']) && !empty($_POST['pass']) && 
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