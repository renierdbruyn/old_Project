<html>
<head>
	<title>School Subjects</title>
	<link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
<div class="divHeading">
	<h1>High School Subjects</h1>
</div>
<form action="../Controller/subjects.php" method="post">
<label>Subject Name</label>
<input type="text" name="subject" title="Enter a subject you did on your last high school year"/>
<p></p>
<label>Subject Marks</label>
<input type="text" name="marks" title="Enter marks for the above subject"/>
<p></p>
<label>Year Completed</label>
<input type="text" name="year" title="Enter the year you did the subject"/>
<p></p>
<input class="add" type="submit" name="add" value="Save Subject" title="click to save the subject to the database"/>
<input class="button" type="button" value="Next" onclick="document.location.replace('../VIEW/tertiary.php')" title="Click to navigate to the next page, this wont save any data">

</form>
</body>
</html>