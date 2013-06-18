<?php
//include("../Controller/membership.php");
include("../Model/connection.php");
include("../Model/work.php");

$workController= new WorkController;
$workModel= new WorkModel;
if(isset($_POST["work"]))
{
	$workController->setData();
	
	$workModel->register($workController->duration, $workController->company, $workController->industry, $workController->position, $workController->duties, $workController->referenceName, $workController->referencePhone, $workController->description);
	header("location:../View/school.php");
}


Class WorkController
{
	public $scale;
	public $unit;
	public $duration;
	public $company;
	public $industry;
	public $position;
	public $duties;
	public $referenceName;
	public $referencePhone;
	public $description;
	
	function setData()
	{
 		$this->scale=$_POST["number"];
		$this->unit=$_POST["unit"];
		$this->company=$_POST["company"];
		$this->industry=$_POST["industry"];
		$this->position=$_POST["position"];
		$this->duties=$_POST["duties"];
		$this->referenceName=$_POST["name"];
		$this->referencePhone=$_POST["phone"];
		$this->description=$_POST["description"];
		$this->duration=$this->scale." ".$this->unit;
	}
}

?>