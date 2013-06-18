<?php
require_once("config/db.php");

// class autoloader function, this includes all the classes that are needed by the script
// you can remove this stuff if you want to include your files manually
function autoload($class) {
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
//create a database connection
$db = new Database();

$login = new Login($db);
// are we logged in ?
if ($login->isUserLoggedIn()) {

}
?>
<html>
<head>
	<title>Applications</title>
	<style>
		input
		{
			
			left:40%;
			height:30px;
			width:30%;
		}
		
		body
		{
			background:#F0F0F0;
		}
		
		label
		{
			width:30%;
			height:30px;
			
			left:1%;
		}
		
		.color
		{
			background:#B1B1B1;
			border-left:#B1B1B1;
		}
		
		.button
		{
			background:#B1B1B1;
			font-size:20px;
			border:0px;
		}
	</style>
</head>
<body>
<div class="color">
	<h1>Applications</h1>
</div>
<div>
	<form action="login.php" method="post">
		<table width="100%" border="0">
			<tr>
				<th>Job Title</th>
				<th>Status</th>				
			</tr>
			<tr class="color">
				<td>Programmer</td>
				<td>Approved</td>
			</tr>
			<tr>
				<td>Electronic Engineer</td>
				<td>Regret</td>
			</tr>
			<tr class="color">
				<td>Boiler Maker</td>
				<td>Regret</td>
			</tr>
			<tr>
				<td>Web Developer</td>
				<td>Approved</td>
			</tr>
		</table>
		<br/>		
	<!--	<input class="button" type="submit" name="login" value="Login" />-->
		<br/>
	</form>
</div>
</body>
</html>