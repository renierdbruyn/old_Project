<?php
echo "hello";

include_once("../Controller/mysql.php");
$database = new Mysql();
$database->connect();

$query = "select * from Applicant";
$result = mysql_query($query) or die(mysql_error());


$row = mysql_fetch_assoc($result);
  echo  $row['Ap_id'];
    echo        $row['Ap_name'] ;
               

 