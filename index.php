<?php
require 'p_auth.php';

$auth_instance = new c_auth\api("program version", "program key", "api key");

if(isset($_POST['submit'])){
	$logged_in = $auth_instance->all_in_one($_POST['token']);

	if($logged_in){ //do something in case the login was successful
		print_r($_SESSION["user_data"]);

   		exit;
	}
}
?>
<html>
<head>
<title>cAuth Example</title>
</head>
<body>
<form method="post">
<input type="text" name="token" placeholder="your login token" /> <br>
<input type="submit" name="submit" />
</form>
<body>
</html>
