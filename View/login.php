<?php
	session_start();
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
<div class="divHeading">
    <h1>Login</h1>
</div>
<form action="../Controller/login.php" method="post">
<label>Username</label>

<input type="text" name="username" title="Enter your ID number"/>
<p></p>
<label>Password</label>

<input type="password" name="password" title="Enter the password you chose when creating the profile"/>
<p></p>

<a href="../View/membership.php">Register</a>

<input class="button" type="submit" value="LOGIN" name="login"/>
</form>
</body>
</html>
