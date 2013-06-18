<?php
session_start();
	$word=$_POST["word"];
	$greet=$_POST["greet"];
	$_SESSION['greet']=$greet;
	$_SESSION['word']=$word;
	header("location:../Model/three.php");
	
?>