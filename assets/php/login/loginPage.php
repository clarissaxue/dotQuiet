<?php
	// for any page you want to use same session in, have to use same name & session start()
	session_name("signed_in"); // session name should be a unique name
	session_start();

	// make sure logged in before user can access page
	if (!$_SESSION['login']) {
		header("Location: index.php"); // user not logged in, redirect to login page
	}
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    </body>
</html>