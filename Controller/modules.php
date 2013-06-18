<?php
//include("../CONTROLLER/membership.php");
include("../MODEL/connection.php");
include("../MODEL/modules.php");

$modulesController= new ModulesController;
$modulesModel= new ModulesModel;
if(isset($_POST["add"]))
{
	$modulesController->setData();
	
	$modulesModel->register($modulesController->subject, $modulesController->marks, $modulesController->year);
	
}

Class ModulesController
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