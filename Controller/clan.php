<?php
//including the model class for database interactivity
include("../Model/store.php");

//Instantiating a class from the model namespace
$clanmodel= new ClanModel;

//The heading of the page
echo "<h1>RETURN CLAN NAME</h1>";


$instanceClass=new Clan;
echo $instanceClass->setData();

$clanmodel->storeClan($instanceClass->setData());



Class Clan
{
 	// variable which will store the clan name from the user's input, always keep them private and make function to get its value
	public $clan;
	
	//function for adding data to the data base using a model class function
	function setData()
	{
	 	//checking if the button ADD CLAN was clicked
		
			$this->clan=$_POST["clan"];
			return $this->clan;
		
	}
	
}

?>