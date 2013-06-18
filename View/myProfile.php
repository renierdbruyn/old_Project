<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:../View/login.php");
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="navigation.css" />
</head>

<body>

<div id="wrapper">

<div id="navMenu" >
	
<ul>
<li><a href="#">Online CV</a>

<ul>

<li><a href="personal.php" target="main">Personal</a></li>
<li><a href="school.php" target="main">High School</a></li>
<li><a href="subjects.php" target="main">School Subjects</a></li>
<li><a href="tertiary.php" target="main">Tertiary</a></li>
<li><a href="modules.php" target="main">Tertiary Subjects</a></li>
<li><a href="work.php" target="main">Work History</a></li>

</ul><!-- end inner ul-->

</li><!--end li-->   

<li><a href="#">Applications</a></li><!--end li-->   

<li><a href="#">Documents</a></li><!--end li-->   

<li><a href="#">Products</a>

<ul>

<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>

</ul><!-- end inner ul-->

</li><!--end li-->   

<li><a href="#">Products</a>

<ul>

<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>
<li><a href="#">Link Item</a></li>

</ul><!-- end inner ul-->

</li><!--end li-->   
	
</ul><!--end ul-->

</div><!--end of navMenu-->

</div><!--end of the wrapper div-->

<iframe name="main" width="100%" height="90%" src="personal.php" />

</body>
</html> 