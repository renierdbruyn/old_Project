<?php
session_start();

Class WorkModel
{
 	public $duration;
	public $company;
	public $industry;
	public $position;
	public $duties;
	public $referenceName;
	public $referencePhone;
	public $description;
	public $id;	
 	 	
 	function register($duration, $company, $industry, $position, $duties, $referenceName, $referencePhone, $description)
	{
		$this->duration=$duration;
		$this->company=$company;
		$this->industry=$industry;
		$this->position=$position;
		$this->duties=$duties;
		$this->referenceName=$referenceName;
		$this->referencePhone=$referencePhone;
		$this->description=$description;
		$this->id=$_SESSION['username'];
		
		$insert="INSERT INTO work(duration, company, industry, position, duties, reference_name, reference_phone, description, id_number) VALUES('$this->duration','$this->company','$this->industry','$this->position','$this->duties','$this->referenceName','$this->referencePhone','$this->description','$this->id')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert work data ".mysql_error()."<br/>";
		else 
		echo " Work data added <br/>";
	}
}
?>