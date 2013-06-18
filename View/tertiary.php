<html>
<head>
	<title>Tertiary</title>
	<link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
<div class="divHeading">
	<h1>Tertiary Details</h1>
</div>
<form action="../Controller/tertiary.php" method="post">
<label>Institution Name</label>
<input type="text" name="institution" title="Enter name of college or university where you did your course"/>
<p></p>
<label>Qualification Name</label>
<input type="text" name="qualification" title="Enter the name of the qualification you have"/>
<p></p>
<label>Start Year</label>
<input type="text" name="start" title="Enter the year you started your course"/>
<p></p>
<label>End Year</label>
<input type="text" name="end" title="Enter the year you finished your course"/>
<p></p>
<input class="button" type="submit" name="tertiary" value="Next" title="Click here to submit the above data"/>
</form>
</body>
</html>