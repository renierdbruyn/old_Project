<?php
session_start();
//include("../CONTROLLER/membership.php");
include("../Model/login.php");
include("../Model/connection.php");
$connection= new Connection;
$loginController= new LoginController;
$loginModel= new LoginModel;
if(isset($_POST["login"]))
{
	$loginController->setData();
	
	$loginModel->login($loginController->username, $loginController->password);
	header("location:../View/myProfile.php");
}


Class LoginController
{
	public $username;
	public $password;	
	
	function setData()
	{
	 	
 		$this->username=$_POST["username"];
		$this->password=$_POST["password"];
		$this->password=md5($this->password);
		
		$this->username=stripslashes($this->username);
		$this->password=stripslashes($this->password);
		$this->username=mysql_real_escape_string($this->username);
		$this->password=mysql_real_escape_string($this->password);
		
				
	}
}

?>