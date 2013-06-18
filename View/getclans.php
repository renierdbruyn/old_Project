<?php
include("../Model/store.php");
$get= new ClanModel;
$get->getClan();
?>
<html>
<head>

</head>
<body>
<button onmousedown="document.location.replace('updateclans.php')">UPDATE</button>
</body>
</html>