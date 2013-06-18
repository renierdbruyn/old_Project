<?php
session_start();

Class TertiaryModel
{
 	public $institution;
	public $qualification;
	public $start;
	public $end;
	public $id;	
 	 	
 	function register($institution, $qualification, $start, $end)
	{
		$this->institution=$institution;
		$this->qualification=$qualification;
		$this->start=$start;
		$this->end=$end;
		$this->id=$_SESSION['username'];
		
		$insert="INSERT INTO tertiary(institution, qualification, start_year, end_year, id_number) VALUES('$this->institution','$this->qualification','$this->start','$this->end','$this->id')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert tertiary data ".mysql_error()."<br/>";
		else 
		echo " Tertiary data added <br/>";
	}
}
?>