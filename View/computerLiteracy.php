<?php
	
	echo"<script>alert(\"Tertiary data inserted\")</script>";
	//include"computerLiteracy.class.php";

	$pc=new Computer;
	
	
?>
<html>
<head>
	<title>Computer Literacy</title>
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
		
			
	</style>
	
	<script type="text/javascript" src="C:\wamp\www/jquery-1.9.1.min.js">
		
	</script>
	
</head>
<body>
<div class="divBody" name="body">
<form action="computerLiteracy.php" method="post">
	<table name="computerLiteracy" width="100%">
	<colgroup>
		<col style="width:20%;" >
		<col style="width:40%;" >
		<col style="width:1%;" >
		<col style="width:1%;" >
	<colgroup>
	<tr>
		<td>MS Office Word</td>
		<td><input type="checkbox" value="MS Office Word" <?php if($pc->word==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>MS Office Access</td>
		<td><input type="checkbox" value="MS Office Access" <?php if($pc->access==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>MS Office Excel</td>
		<td><input type="checkbox" value="MS Office Excel" <?php if($pc->excel==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>MS Office Power point</td>
		<td><input type="checkbox" value="MS Office Power Point" <?php if($pc->powerpoint==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>MS Office Publisher</td>
		<td><input type="checkbox" value="MS Office Publisher" <?php if($pc->publisher==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>MS Office Outlook</td>
		<td><input type="checkbox" value="MS Office Outlook" <?php if($pc->outlook==1) echo'checked'; ?> name="computerLiteracy[]"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" name="computer" />
		</td>
	</tr>	
	</table>
</form>

</div>
</body>
</html>