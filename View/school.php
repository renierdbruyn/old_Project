<html>
<head>
	<title>High School</title>
	<link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
<div class="divHeading">
	<h1>High School Details</h1>
</div>
<form action="../Controller/school.php" method="post">
<label>School Name</label>
<input type="text" name="schoolName" title="Enter school name"/>
<p></p>
<label>Number of Subjects</label>
<input type="text" name="numberOfSubjects" title="Enter number of subjects"/>
<p></p>
<label>Reference Name</label>
<input type="text" name="referenceName" title="Enter name and surname of your reference"/>
<p></p>
<label>Reference Phone</label>
<input type="text" name="referencePhone" title="Enter phone number of your reference"/>
<p></p>
<label>Year</label>
<input type="text" name="year" title="Enter your last year of high school"/>
<p></p>
<p></p>
<input class="button" type="submit" name="school" value="Next" title="click to submit the above data"/>
</form>
</body>
</html>
	