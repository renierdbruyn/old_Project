<?php
//include("../CONTROLLER/membership.php");
include("../Model/connection.php");
include("../Model/subjects.php");

$subjectsController= new SubjectsController;
$subjectsModel= new SubjectsModel;
if(isset($_POST["add"]))
{
	$subjectsController->setData();	
	$subjectsModel->register($subjectsController->subject, $subjectsController->marks, $subjectsController->year);	
}

Class SubjectsController
{
	public $subject;
	public $marks;
	public $year;	
	
	function setData()
	{
 		$this->subject=$_POST["subject"];
		$this->marks=$_POST["marks"];
		$this->year=$_POST["year"];
	}
	
}

?>