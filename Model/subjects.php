<?php
session_start();

Class SubjectsModel
{
 	public $subject;
	public $marks;
	public $year;
	public $id;	
 	 	
 	function register($subject, $marks, $year)
	{
		$this->subject=$subject;
		$this->marks=$marks;
		$this->year=$year;
		$this->id=$_SESSION['username'];
		
		$insert="INSERT INTO subjects(name, marks, year, id_number) VALUES('$this->subject','$this->marks','$this->year','$this->id')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert school subject data ".mysql_error()."<br/>";
		else 
		echo " School subject data added <br/>";
	}
}
?>