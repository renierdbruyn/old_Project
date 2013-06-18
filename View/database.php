<?php

	$con=mysql_connect("localhost", "root", "");
	if(!$con)
	{
		echo"COuld not connect ".msql_error();
	}
	else
	{
		echo"Yippy we got a connection </br>";
	}
	
	$createdb="CREATE DATABASE employment";
	if(!mysql_query($createdb, $con))
	{
		echo"Could not create database ".mysql_error()."<br/>";
	}
	else
	{
		echo"Database created <br/>";
	}
	
	mysql_select_db("employment", $con);
	
	$tableperson="CREATE TABLE personal(personID int auto_increment primary key, name varchar(20),
	 lastname varchar(20), id_number varchar(13), phone varchar(10), email varchar(25), address varchar(100),
	 nationality varchar(50), languages varchar(200), health varchar(100), drivers_license varchar(20))";
	if(!mysql_query($tableperson, $con))
	{
		echo"Person table could not be created ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy Person table created <br/>";
	}
	
	$tableexperience="CREATE TABLE job_history(experienceID int primary key auto_increment not null, 
	duration_number int, duration_unit varchar(10), company varchar(30), industry varchar(30), position varchar(20), 
	duties varchar(200), reference_name varchar(20), reference_phone int(10), self_description varchar(200), 
	id_number varchar(13), foreign key (id_number) references personal(id_number) )";
	if(!mysql_query($tableexperience, $con))
	{
		echo"Experience table not created ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy experience table created <br/>";
	}
	
	$tablequalifications="CREATE TABLE matric(matricID int primary key auto_increment, school_name varchar(30),
	 secondary_subject1 varchar(20), secondary_subject2 varchar(20), secondary_subject3 varchar(20), 
	secondary_subject4 varchar(20), secondary_subject5 varchar(20), secondary_subject6 varchar(20), 
	secondary_subject7 varchar(20),	secondary_subject8 varchar(20), secondary_subject9 varchar(20), 
	secondary_subject10 varchar(20), id_number varchar(13), foreign key (id_number) references personal (id_number))";
	if(!mysql_query($tablequalifications, $con))
	{
		echo"Could not create qualifications table ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy qualifications table created <br/>";
	}
	
	$tablecomputer="CREATE TABLE computer(computerID int primary key auto_increment, skills varchar(100), 
	id_number varchar(13), foreign key (id_number) references personal (id_number))";
	if(!mysql_query($tablecomputer, $con))
	{
		echo"Could not create computer table ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy computer table created <br/>";
	}
	
	$tabletertiary="CREATE TABLE tertiary(tertiaryID int primary key auto_increment, status varchar(100), 
	year int(4), qualification_name varchar(20), institution varchar(30), tertiary_subject1 varchar(20),
	 tertiary_subject2 varchar(20), tertiary_subject3 varchar(20), tertiary_subject4 varchar(20),
	  tertiary_subject5 varchar(20), tertiary_subject6 varchar(20), tertiary_subject7 varchar(20), 
	  tertiary_subject8 varchar(20), tertiary_subject9 varchar(20), tertiary_subject10 varchar(20), 
	  id_number varchar(13), foreign key (id_number) references personal (id_number))";
	if(!mysql_query($tabletertiary, $con))
	{
		echo"Could not create computer table ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy tertiary table created <br/>";
	}
	
	$tablemember="CREATE TABLE member(memberID int(4) primary key auto_increment, name varchar(20), surname varchar(20), phone varchar(10), password varchar(40), id_number varchar(13), foreign key (id_number) references personal (id_number))";
	if(!mysql_query($tablemember, $con))
	{
		echo"Could not create member table ".mysql_error()."<br/>";
	}
	else
	{
		echo"Yippy member table created <br/>";
	}
?>