<?php
//include("../CONTROLLER/membership.php");
include("../Model/connection.php");
include("../Model/school.php");

$schoolController= new SchoolController;
$schoolModel= new SchoolModel;
if(isset($_POST["school"]))
{
	$schoolController->setData();
	
	$schoolModel->register($schoolController->name, $schoolController->numberOfSubjects, $schoolController->referenceName, $schoolController->referencePhone, $schoolController->year);
	header("location:../View/subjects.php");
}


Class SchoolController
{
	public $name;
	public $numberOfSubjects;
	public $referenceName;
	public $referencePhone;
	public $year;	
	
	function setData()
	{
 		$this->name=$_POST["schoolName"];
		$this->numberOfSubjects=$_POST["numberOfSubjects"];
		$this->referenceName=$_POST["referenceName"];
		$this->referencePhone=$_POST["referencePhone"];
		$this->year=$_POST["year"];
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