<?php
	// for any page you want to use same session in, have to use same name & session start()
	session_name("dotQuiet"); // session name should be a unique name
	session_start();

	// make sure logged in before user can access page
	if (!$_SESSION['login']) {
		header("Location: index.php"); // user not logged in, redirect to login page
  } else {