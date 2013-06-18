<?php	
session_start();		
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css"	/>
</head>
<body>
<div class="navigation">
	<button class="navigation" onclick="main.location.replace('onlinecv.php');">ONLINE CV</button>
	<button class="navigation" onclick="main.location.replace('documents.php');">DOCUMENTS</button>
	<button class="navigation" onclick="main.location.replace('applications.php');">APPLICATIONS</button>
	<!--<button class="navigation" onclick="main.location.replace('profileManagement.php');">PROFILE MANAGEMENT</button>	-->
</div>

<div class="main">
	<iframe width="500px" height="500px" src="welcome.php" name="main" frameborder="0"/>
</div>

</body>
</html>