<?php
//include"matric.class.php";

$matric = new Matric;
?>
<html>
<head>
	<title>Matric</title>
	<style>
		
		.divHeader
		{
			width:96%;
			height:150px;
			position:absolute;
			right:2%;
			left:2%;
			
			background:#B1B1B1;
		}
		
		.divBody
		{			
			position:absolute;
		 	right:2%;
		 	left:2%;
			width:96%;
			
			
		}
		
		.divFooter
		{
		 	position:absolute;
		 	right:2%;
		 	left:2%;
		 	top:700px;
			width:96%;
			height:80px;			
			background:#B1B1B1;		
		}
		
		img
		{
			position:absolute;
			top:45%;
		}
		
		
		
		.address
		{
			background:#B1B1B1;
			border-color:#B1B1B1;
		}
		
		input, label, select, option
		{
			width:40%;
			height:30px;
		}
		
		.select
		{
			width:20%;
		}
		
		span
		{
			color:red;
		}
			
	</style>
	
	<script type="text/javascript" src="C:\wamp\www/jquery-1.9.1.min.js">
		
	</script>
	
</head>
<body>

<div class="divBody" name="body">
<form action="matric.class.php" method="post" name="secondary">
	<table width="100%">
	<colgroup>
		<col style="width:40%;" >
		<col style="width:60%;" >
		
	<colgroup>	
		
		<tr>
			<td>School Name</td>
			<td>
			
			<input type="text" name="txtSchool" title="Enter name of school where you matriculated" />
			
			<span>*</span>
			<span><?php if($matric->schoolError==1) echo"Enter school name"; ?></span></td>
		</tr>
		<tr>
			<td>First Subject</td>
			<td>
			<SELECT NAME="Subject1" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject1Error==1) echo"Select first subject"; ?></span></td>
		</tr>
		<tr>
			<td>Second Subject</td>
			<td>
			<SELECT NAME="Subject2" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject2Error==1) echo"Select second subject"; ?></span></td>
		</tr>
		<tr>
			<td>Third Subject</td>
			<td>
			<SELECT NAME="Subject3" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			</span><?php if($matric->subject3Error==1) echo"Select third subject"; ?></span></td>
		</tr>
		<tr>
			<td>Fourth Subject</td>
			<td>
			<SELECT NAME="Subject4" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject4Error==1) echo"Select fourth subject"; ?></span></td>
		</tr>
		<tr>
			<td>Fifth Subject</td>
			<td>
			<SELECT NAME="Subject5" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject5Error==1) echo"Select fifth subject"; ?></span></td>
		</tr>
		<tr>
			<td>Sixth Subject</td>
			<td>
			<SELECT NAME="Subject6" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject6Error==1) echo"Select sixth subject"; ?></span></td>
		</tr>
		<tr>
			<td>Seventh Subject</td>
			<td>
			<SELECT NAME="Subject7" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			<span>*</span>
			<span><?php if($matric->subject7Error==1) echo"Select seventh subject"; ?></span></td>
		</tr>
		<tr>
			<td>Eighth Subject (optional)</td>
			<td>
			<SELECT NAME="Subject8" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			</td>
		</tr>
		<tr>
			<td>Nineth Subject (optional)</td>
			<td>
			<SELECT NAME="Subject9" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			
		</tr>
		<tr>
			<td>Tenth Subject (optional)</td>
			<td>
			
			<SELECT NAME="Subject10" title="Select matric subject">
				<option>Select Matric Subject</option>
				<option value="Accounting">Accounting</option>
				<option value="Afrikaans Eerste Addisionele Taal">Afrikaans Eerste Addisionele Taal</option>
				<option value="Afrikaans Huistall">Afrikaans: Huistaal</option>
				<option value="Agricultural Management Practices.zip">Agricultural Management Practices</option>
				<option value="Agricultural Sciences">Agricultural Sciences</option>
				<option value="Agricultural Technology">Agricultural Technology</option>
				<option value="Business Studies">Business Studies</option>
				<option value="Civil Technology">Civil Technology</option>
				<option value="Computer Applications Technology">Computer Applications Technology</option>
				<option value="Consumer Studies">Consumer Studies</option>
				<option value="Dance Studies">Dance Studies</option>
				<option value="Design">Design</option>
				<option value="Dramatic Arts">Dramatic Arts</option>
				<option value="Economics">Economics</option>
				<option value="Electrical Technology">Electrical Technology</option>
				<option value="Engineering Graphics and Design">Engineering Graphics and Design</option>
				<option value="English FAL">English First Additional Language</option>
				<option value="English HL">English Home Language</option>
				<option value="Geography">Geography </option>
				<option value="History">History </option>
				<option value="Hospitality Studies">Hospitality Studies</option>
				<option value="Information Technology">Information Technology </option>
				<option value="IsiXhosa FAL">IsiXhosa First Additional Language</option> 
				<option value="IsiXhosa HL">IsiXhosa Home Language </option>
				<option value="IsiZulu FAL">IsiZulu First Additional Language </option>
				<option value="IsiZulu HL">IsiZulu Home Language </option>
				<option value="Life Sciences">Life Sciences</option>
				<option value="Mathematical Literacy">Mathematics Literacy</option>
				<option value="Mathematics">Mathematics </option>
				<option value="Music">Music</option>			
				<option value="Physical Science">Physical Sciences</option>				
				<option value="Religion Studies">Religion Studies</option>
				<option value="Sesotho FAL">Sesotho First Additional Language </option>
				<option value="Sesotho HL">Sesotho Home Language </option>				
				<option value="Setswana FAL">Setswana First Additional Language</option>
				<option value="Setswana HL">Setswana Home Language</option>			
			</SELECT>
			
		</tr>
		<tr>
			<td><span>I Have A Tertiary Qualification</span><input style="width:20px; height:15px;" value="1" type="checkbox" 
			name"qualified" title="If you have a college or university qualification, check this box enter that information."/></td>
			
			<td><input type="submit" name="secondary" value="Next"/></td>
		</tr>
	</table>
</form>
<script>

</script>

</div>
</body>
</html>