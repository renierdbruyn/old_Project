<?php

//include("../CONTROLLER/membership.php");
include("../Model/connection.php");
include("../Model/personal.php");

$personalController= new PersonalController;
$personalModel= new PersonalModel;
if(isset($_POST["personal"]))
{
	$personalController->setData();
	
	$personalModel->register($personalController->email, $personalController->address, $personalController->nationality, $personalController->health, $personalController->license, $personalController->languages);
	header("location:../View/school.php");
}


Class PersonalController
{
	public $email;
	public $street;
	public $town;
	public $code;
	public $nationality;
	public $health;
	public $license;
	public $languages;
	public $address;	
	
	function setData()
	{
	 	$types="";
 		$this->email=$_POST["email"];
		$this->street=$_POST["street"];
		$this->town=$_POST["town"];
		$this->code=$_POST["code"];
		$this->nationality=$_POST["nationality"];
		$this->health=$_POST["health"];
		$this->license=$_POST["license"];
		$this->address=$this->street.", ".$this->town.", ".$this->code;
		if(isset($_POST["languages"]))
		{
			$data=$_POST["languages"];
			
			if(isset($data) && is_array($data))
			{
				foreach($data as $greet)
				{
					$types=$types." ".$greet;
				} 
			}
			$this->languages=$types;
		}
	}
}

?>