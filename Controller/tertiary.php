<?php
//include("../CONTROLLER/membership.php");
include("../Model/connection.php");
include("../Model/tertiary.php");

$tertiaryController= new TertiaryController;
$tertiaryModel= new TertiaryModel;
if(isset($_POST["tertiary"]))
{
	$tertiaryController->setData();
	
	$tertiaryModel->register($tertiaryController->institution, $tertiaryController->qualification, $tertiaryController->start, $tertiaryController->end);
	header("location:../View/modules.php");
}

Class TertiaryController
{
	public $institution;
	public $qualification;
	public $start;
	public $end;	
	
	function setData()
	{
 		$this->institution=$_POST["institution"];
		$this->qualification=$_POST["qualification"];
		$this->start=$_POST["start"];
		$this->end=$_POST["end"];
	}
}

?>