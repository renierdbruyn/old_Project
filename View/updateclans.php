<?php
include("../Model/store.php");
$get= new ClanModel;
if(isset($_POST["search"]))
{
	$clan=$get->search($_POST["ID"]);
	
	
}
?>
<html>
<head>
	<script>
		function update()
		{
			getElementById("clan").innerHTML="Clan name";
			document.up.clan.value="Clan name";
		}
	</script>
</head>
<body>
<form name="up" action="updateclans.php" method="post">
<label id="clan">Clan ID</label><input onclick="update()" type="text" id="id" name="ID" value="<?php if(isset($_POST['search'])) echo $clan; ?>"/>
<input type="submit" name="search" value="SEARCH CLAN" />
</form>
</body>
</html>