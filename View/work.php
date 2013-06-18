<html>
<head>
    <title>Personal Details</title>
    <link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
    <div class="divHeading">
        <h1>Job History</h1>
    </div>
<form action="../Controller/work.php" method="post">
	<label>Duration</label>
    <select class="duration" name="number" title="Select a number for the duration ">
		<option>0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	<select class="duration2" name="unit" title="Select a unit for the duration, it will complement the chosen number " >
		<option>Unit</option>
		<option value="Weeks">Weeks</option>
		<option value="Months">Months</option>
		<option value="Years">Years</option>
	</select>
    <p></p>
    <label>Company</label>
    <input name="company" title="Enter the name of the company you worked for " type="text" />
    <p></p>
    <label>Industry Type</label>
    <input name="industry" title="Enter the type of industry that best best define the company above " type="text" />
    <p></p>
    <label>Position</label>
    <input name="position" title="Enter the position that was/is entitled to you within the company " type="text" />
    <p></p>
    <div>
	<label>Duties</label>
    <textarea name="duties" title="Enter a list of duties you performed in the company, seperated by commas "></textarea>
    </div>
    <br/>
    <p></p>
    <label>Reference Name</label>
    <input name="name" title="Enter name and surname of your reference " type="text" />
    <p></p>
    <label>Reference Phone</label> 
    <input name="phone" title="Enter a phone number where your reference can be contacted " type="text" />
    <p></p>
    <div>
    <label>Self Description</label> 
    <textarea name="description" title="Describe yourself "></textarea>
    </div>
    <br/>
    <p></p>
    <input class="button" name="work" type="submit" value="Finish" title="Click to save the above data and navigate to the next page"/>        

</form>
</body>
</html>