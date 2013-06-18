<html>
<head>
    <title>Personal Details</title>
    <link type="text/css" rel="stylesheet" href="style.css" >
</head>
<body>
    <div class="divHeading">
        <h1>Personal Details</h1>
    </div>
<form action="../Controller/personal.php" method="post">
    <label>Email</label>
    <input name="email" title="Enter your email address " type="text" />
    <p></p>
    <label>Street</label> 
    <input name="street" title="[ADDRESS] Enter your house number and street " type="text" />
    <p></p>
    <label>Town</label> 
    <input name="town" title="[ADDRESS] Enter your town " type="text" />
    <p></p>
    <label>Postal Code</label> 
    <input name="code" title="[ADDRESS] Enter your postal code " type="text" />
    <p></p>
	<label>Nationality</label>
    <input name="nationality" title="Enter your nationality" type="text" />
    <p></p>
    <label>Health</label>
    <select name="health" title="Select health corresponging to yours">
        <option value="">Select Your Health</option>
        <option value="Good">Good</option>
        <option value="Excellent">Excellent</option>
        <option value="Okay">Okay</option>
        <option value="Bad">Bad</option>
        <option value="Poor">Poor</option>
        <option value="Critical">Critical</option>
    </select>
    <p></p>
    <label>Drivers License</label>
    <select name="license" title="Select your license status ">
        <option value="none">None</option>
        <option value="Code A1">Code A1</option>
        <option value="Code A">Code A</option>
        <option value="Code B">Code B</option>
        <option value="Code C1">Code C1</option>
        <option value="Code C">Code C</option>
        <option value="Code EB">Code EB</option>
        <option value="Code EC1">Code EC1</option>
        <option value="Code EC">Code EC</option>
    </select>
    <p></p>
	<div class="colTwo">
	<fieldset title="Select your languages. Hold Ctrl button to select multiple languages" class="languages">
	<legend><label><h3>Languages</h3></label></legend>	
	
        <input type="checkbox" name="languages[]" value="isiZulu" /><label>isiZulu</label><br/>
        <input type="checkbox" name="languages[]" value="English" /><label>English</label><br/>
        <input type="checkbox" name="languages[]" value="isiXhosa" /><label>isiXhosa</label><br/>
        <input type="checkbox" name="languages[]" value="seSotho" /><label>seSotho</label><br/>
        <input type="checkbox" name="languages[]" value="Afrikaams" /><label>Afrikaans</label><br/>
        <input type="checkbox" name="languages[]" value="seTswana" /><label>seTswana</label><br/>
        <input type="checkbox" name="languages[]" value="sePedi" /><label>sePedi</label><br/>
        <input type="checkbox" name="languages[]" value="tshiVenda" /><label>tshiVenda</label><br/>
        <input type="checkbox" name="languages[]" value="siSwati" /><label>siSwati</label><br/>
        <input type="checkbox" name="languages[]" value="xiTsonga" /><label>xiTsonga</label><br/>
        <input type="checkbox" name="languages[]" value="isiNdebele" /><label>isiNdebele</label><br/>
    
    </fieldset>
	</div>
    <input class="button" name="personal" type="submit" value="Next" />        

</form>
</body>
</html>
