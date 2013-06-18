<?php
include("../Model/connection.php");
if(mysql_query("CREATE DATABASE YCR"))
	echo "database created <br/>";
else
 echo "Error ".mysql_error()."<br/>";
$member="CREATE TABLE member(id_number VARCHAR(13) PRIMARY KEY NOT NULL, name VARCHAR(20), surname VARCHAR(20), phone VARCHAR(10), password VARCHAR(15))";
if(mysql_query($member))
echo "member created<br/>";
else
 echo "Error ".mysql_error()."<br/>";
$personal="CREATE TABLE personal(person_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, email VARCHAR(20), address VARCHAR(50), nationality VARCHAR(20), health VARCHAR(10), driver_license VARCHAR(10), languages VARCHAR(100), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($personal))
echo "personal created <br/>";
else
 echo "Error ".mysql_error()."<br/>";

$school="CREATE TABLE school(school_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, name VARCHAR(20), subjects INT, reference_name VARCHAR(30), reference_phone VARCHAR(10), year INT(4), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($school))
echo "school created<br/>";
else
 echo "Error ".mysql_error()."<br/>";

$subjects="CREATE TABLE subjects(subject_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, name VARCHAR(20), marks INT, year INT(4), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($subjects))
echo "subjects created <br/>";
else
 echo "Error ".mysql_error()."<br/>";

$tertiary="CREATE TABLE tertiary(tertiary_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, institution VARCHAR(20), qualification VARCHAR(20), start_year INT(4), end_year INT(4), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($tertiary))
echo "tertiary created <br/>";
else
 echo "Error ".mysql_error()."<br/>";

$modules="CREATE TABLE modules(module_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, name VARCHAR(20), marks INT(3), year INT(4), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($modules))
echo "modules created <br/>";
else
 echo "Error ".mysql_error()."<br/>";

$work="CREATE TABLE work(work_id INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL, duration VARCHAR(10), company VARCHAR(20), industry VARCHAR(20), position VARCHAR(20), duties VARCHAR(300), reference_name VARCHAR(30), reference_phone VARCHAR(10), description VARCHAR(300), id_number VARCHAR(13), FOREIGN KEY(id_number) REFERENCES member(id_number))";
if(mysql_query($work))
echo "work created <br/>";
else
 echo "Error ".mysql_error()."<br/>";

?>