<?php
include 'index.php';
include '../View/header.footer/header.php';
include_once '../View/validateForm/FormValidator.php';
?>


    <!-- begin content -->
	<h1>Please <a href="#">fill in </a>your details</h1>
      <div id="site_content">
      <div id="left_content">
        <div id="blog_container">

<form action="login.php" method="post" >
	<h1>Pernsonal Details</h1>   
	<hr />   
	<table >
    <tr>
        <td class="auto-style3">
			<label>Name</label>
		</td>
        <td>
            <input id="Text1" type="text" name="firstName"/>
			<span>*</span>
			<?php if($firstNameVal) echo"<span>enter first name</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Last Name</label>
		</td>
        <td>
            <input id="Text3" name="lastName" type="text" />
			<span>*</span>
			<?php if($lastNameVal) echo"<span> enter last name</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Race</label>
		</td>
        <td>
            <select name="race">
                <option value="Select One">Select One</option>
                <option value="African">African</option>
                <option value="Coloured">Colored</option>
                <option value="White">White</option>
                <option value="Indian">Indian</option>
                <option value="Asian">Asian</option>                    
            </select>
			<span>*</span>
			<?php if($raceVal) echo"<span> select race</span>"; ?>
		</td>
    </tr>
    
    <tr>
        <td class="auto-style3">
			<label>Date Of Birth</label>
		</td>
        <td>
            <input  name="dateOfBirth"  type="text" />
			<span>*</span>
			<?php if($dateOfBirthVal) echo"<span> enter date of birth</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>ID Number</label>
		</td>
        <td>  
            <input name="idNumber" id="Text12" type="text" />
			<span>*</span>
			<?php if($idVal) echo"<span> enter ID number</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Citizenship</label>
		</td>
        <td>
            <select name="citizenship">
                <option value="Select One">Select One</option>
                <option value="SA by birth">SA by birth</option>
                <option value="Permanent resident">Permanent resident</option>
                <option value="Non-SA">Non-SA</option>                    
            </select>
			<span>*</span>
			<?php if($citizenshipVal) echo"<span> select citizenship</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Languages</label>
		</td>
        <td>

            <textarea id="TextArea1" cols="17" name="languages" rows="4"></textarea>
			<span>*</span>
			<?php if($languagesVal) echo"<span> enter languages</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Health</label>
		</td>
        <td>
            <textarea id="TextArea1" name="health" cols="17" rows="4"></textarea>
			<span>*</span>
			<?php if($healthVal) echo"<span> enter health</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3"><label>Transportation </label></td>
        <td>
            <select id="Select1" name="transport">
                <option value="Select One">Select One</option>
                <option value="Own">Own Transport</option>
                <option value="Public">Public Transport</option>
            </select>
			<span>*</span>
			<?php if($transportVal) echo"<span> select transport</span>"; ?>
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Drivers License</label>
		</td>
        <td>
            Yes :<input style="width:30px;" name="license" type="radio" value="Yes"/> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
            No :<input style="width:30px;" name="license" type="radio" value="No"/>
            <span>*</span>
			<?php if($licenseVal) echo"<span> select license status</span>"; ?>
        </td>
    </tr>
    <tr>
        <td class="auto-style3">
			&nbsp;
		</td>
        <td>
            &nbsp;
		</td>
    </tr>
    </table>
    
    <fieldset>
    <legend>Address</legend>
    <table style="margin-left:15px;">
    <tr> 
                   
        <td class="style1">
			&nbsp;
		</td>
        <td>                
            &nbsp;
		</td>            
    </tr>
    <tr> 
                   
        <td class="style1">
			<label>Residential Address</label>
		</td>
        <td>                
            <input style="width:200px;" name="street" id="Text10" type="text" />
            <span>*</span><br/>
			<?php if($streetVal) echo"<span> enter street</span>"; ?>
            <br />
            <input style="width:200px;" name="suburb" id="Text13" type="text" />
            <span>*</span><br/>
			<?php if($suburbVal) echo"<span> enter suburb</span>"; ?>				
            <br />
            <input style="width:200px;" name="code" id="Text14" type="text" />
            <span>*</span><br/>
			<?php if($codeVal) echo"<span> enter code</span>"; ?>           
        </td>            
    </tr>
    <tr>                    
        <td class="style1">
			&nbsp;
		</td>
        <td>                
            &nbsp;
		</td>            
    </tr>
    </table>
    </fieldset>
    
    <table>
    <tr>
        <td class="auto-style3">
			&nbsp;
		</td>
        <td>
            &nbsp;
		</td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Phone</label>
		</td>
        <td>
            <input id="Text11" name="phone" type="text" />
            <span>*</span>
			<?php if($phoneVal) echo"<span> enter phone</span>"; ?>
        </td>
    </tr>
    <tr>
        <td class="auto-style3">
			<label>Email</label>
		</td>
        <td>
            <input id="Text2" name="email" type="text" />
            <span>*</span>
			<?php if($emailVal) echo"<span> enter email</span>"; ?>
        </td>
    </tr>    
    <tr>
        <td class="auto-style3">
            &nbsp;
		</td>
        <td>
            &nbsp;
		</td>
    </tr>
    
    <tr>
        <td class="auto-style3">
            <input name="submit" type="submit" value="Next" />
		</td>
        <td>
            &nbsp;
		</td>
    </tr>          
    <tr>
        <td class="auto-style3">
            &nbsp;
		</td>
        <td>
            &nbsp;
		</td>
    </tr>              
    </table>
</form>
        

	</div>
      </div>

    </div>
      
    <!-- end content -->

<?php

include '../View/header.footer/Footer.php';
?>


