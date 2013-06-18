<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>
</head>
<body>

</body>
</html>

<html>
<head>
	<title>Job History</title>
	<style type="text/css">
		input, select, textarear
		{		
			height:40px;
			width:300px;
			font-size:16px;
		}
		
		label
		{
			width:300px;
			height:30px;			
			left:1%;
			font-size:20px;
		}		
		
		span
		{
			color:red;
		}
		
		body
		{
			background:#F0F0F0;
		}
		.color
		{
			background:#B1B1B1;
		}
		
		.button
		{
			background:#B1B1B1;
			font-size:20px;
			border:0px;
		}
        .left
        {
            position:absolute;
            left:10%;
            width:40%;
        }
        .right
        {
            position:absolute;
            top:80px;
            left:55%;  
            width:40%; 
            z-index:-1;
        }
        
        textarea
        {
            width:300px;
            height:100px;   
        }
    </style>
</head>
<body>
    <div class="color">
        <h1>Personal Details</h1>
    </div>
<form action="matric.html" method="post">
    <div class="left">
        
        <label>Duration</label>
		<br />
		<select class="select" name="slNumber" title="Select a number for the duration ">
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
        <br />
        <br />
		<select class="select" name="slUnit" title="Select a unit for the duration, 
		it will complement the chosen number " >
			<option>Unit</option>
			<option value="Weeks">Weeks</option>
			<option value="Months">Months</option>
			<option value="Years">Years</option>
		</select>
        <br />
        <label>Company</label><br />
		<input type="text" name="txtCompany" title="Enter previous or current company of employment " />
	    <br />	
		<label>Type of Industry</label><br />
		<input type="text" name="txtIndustry" title="Enter type of industry that best defines the company" />
		<br />
		<label>Position</label><br />
		<input type="text" name="txtPosition" title="Enter the position you held in the company structure " />
		<br />
		<label>Duties</label><br />
		<textarea name="taDuties" 
		title="Enter a list of duties you performed in the company, seperated by commas "></textarea>
        <br />        
		<br />
		<input class="button" type="submit" name="history" />

    </div>
    <div class="right">
        <label>Reference Name</label><br />
		<input type="text" name="txtName" title="Enter a first name and last name of your reference " />
		<br />
		<label>Reference Phone</label><br />
		<input type="text" name="txtPhone" title="Enter phone number of your reference in 10 digits " />
		<br />
        <label>Self Description</label><br />		
		<textarea name="taDescription" title="Describe yourself but dont be too long " >
		</textarea>
		<br />        
    </div>
</form>

</body>
</html>
