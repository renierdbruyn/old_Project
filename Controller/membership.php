<?php

//include("../CONTROLLER/membership.php");
include("../Model/membership.php");
include("../Model/connection.php");

$memberController= new MemberController;
$memberModel= new MemberModel;
if(isset($_POST["membership"]))
{
	$memberController->setData();
	
	$memberModel->register($memberController->name, $memberController->surname, $memberController->phone, $memberController->id, $memberController->password);
	header("location:../View/login.php");
}


Class MemberController
{
	public $name;
	public $surname;
	public $phone;
	public $id;
	public $password;	
	
	function setData()
	{
 		$this->name=$_POST["name"];
		$this->surname=$_POST["surname"];
		$this->phone=$_POST["phone"];
		$this->id=$_POST["id"];
		$this->password=$_POST["password"];
		$this->password=md5($this->password);		
	}
	
	function getName()
	{
		return $this->name;
	}
	
	function getSurame()
	{
		return $this->surname;
	}
	
	function getPhone()
	{
		return $this->phone;
	}
	
	function getID()
	{
		return $this->id;
	}
	
	function getPassword()
	{
		return $this->password;
	}
}

?>