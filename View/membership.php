
<html>
<head>
	<title>Register</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="divHeading">
		<h1>Sign Up</h1>
	</div>
	<div>
	<form action="../Controller/membership.php" method="post">
		<label>Name</label>
		<input type="text" name="name" />
		<p></p>
		<label>Surname</label>
		<input type="text" name="surname" />
		<p></p>
		<label>Phone</label>
		<input type="text" name="phone" />
		<p></p>
		<label>ID Number</label>
		<input type="text" name="id" />
		<p></p>
		<label>Password</label>
		<input type="password" name="password" />
		<p></p>
		<label>Confirm Password</label>
		<input type="password" name="confirmPass" />
		<p></p>
		<input class="button" type="submit" name="membership" value="Register" />
	</form>
	</div>
</body>
</html>

