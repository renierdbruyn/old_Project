<html>
<head>
	<title>Tertiary Subjects</title>
	<link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
<div class="divHeading">
	<h1>Tertiary Subjects</h1>
</div>
<form action="../Controller/modules.php" method="post">
<label>Subject Name</label>
<input type="text" name="subject" title="Enter a subject name for your course(final year)"/>
<p></p>
<label>Subject Marks</label>
<input type="text" name="marks" title="Enter a mark for the subject above"/>
<p></p>
<label>Year Completed</label>
<input type="text" name="year" title="Enter the year you finished the above subject"/>
<p></p>
<input class="add" type="submit" name="add" value="Save Subject" title="Click here to save the subject to the database"/>
<input class="button" type="button" onclick="document.location.replace('../VIEW/work.php')" name="next" value="Next" title="Clck to navigate to the next page, this wont save any data"/>
</form>
</body>
</html>