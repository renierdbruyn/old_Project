<html>
<head>
	
</head>
<body>
<div>
	<h1>CLAN NAMES</h1>
</div>
<div>
<form action="../Controller/clan.php" method="post">
	<label>Clan</label>
	
	<input type="text" name="clan" />
	<br/>
	<input type="submit" name="addclan" /><button onmousedown="document.location.replace('getclans.php')">GET CLANS</button>
</form>

</body>
</html>

<?php

include("../Model/store.php");
$claninst= new ClanModel;

// while($data=mysql_fetch_array($claninst->getClan()))
// {
// 	echo "ID : ".$data[0]." <br/>";
// 	echo "Clan name : ".$data[1]."<br/>";
// }

?>