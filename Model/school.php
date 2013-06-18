<?php
session_start();

Class SchoolModel
{
 	public $name;
	public $numberOfSubjects;
	public $referenceName;
	public $referencePhone;
	public $year;
	public $id;	
 	 	
 	function register($name, $numberOfSubjects, $referenceName, $referencePhone, $year)
	{
		$this->name=$name;
		$this->numberOfSubjects=$numberOfSubjects;
		$this->referenceName=$referenceName;
		$this->referencePhone=$referencePhone;
		$this->year=$year;
		$this->id=$_SESSION['username'];
		
		$insert="INSERT INTO school(name, subjects, reference_name, reference_phone, year, id_number) VALUES('$this->name','$this->numberOfSubjects','$this->referenceName','$this->referencePhone','$this->year','$this->id')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert school data ".mysql_error()."<br/>";
		else 
		echo " School data added <br/>";
	}
}
?>