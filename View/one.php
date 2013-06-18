<?php
session_start();
echo $_SESSION['word'];
?>
<html>
<body>
	<form action="../View/one.php" method="post" >
	Enter a word : <input type="text" name="word" >
	<br/>
	<input type="checkbox" value="hello" name="greet[]" /> Hello
	<br/>
	<input type="checkbox" value="sawubona" name="greet[]" /> sawubona
	<br/>
	<input type="checkbox" value="molo" name="greet[]" /> molo
	<br/>
	<input type="submit" name="send" />
</body>
</html>

<?php 
$types="";
if(isset($_POST["send"]))
{
	$data=$_POST["greet"];
	
	if(isset($data) && is_array($data))
	{
		foreach($data as $greet)
		{
			$types=$types." ".$greet;
		} 
	}
	echo $types;
}
	
?>