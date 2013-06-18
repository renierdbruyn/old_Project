<?php
session_start();

Class PersonalModel
{
 	public $email;
	public $nationality;
	public $health;
	public $license;
	public $languages;
	public $address;
	public $id;	
 	 	
 	function register($email, $address, $nationality, $health, $license, $languages)
	{
		$this->email=$email;
		$this->address=$address;
		$this->nationality=$nationality;
		$this->health=$health;
		$this->license=$license;
		$this->languages=$languages;
		$this->id=$_SESSION['username'];
		
		$insert="INSERT INTO personal( email, address, nationality, health, driver_license, languages, id_number) VALUES('$this->email','$this->address','$this->nationality','$this->health','$this->license','$this->languages','$this->id')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert personal data ".mysql_error()."<br/>";
		else 
		echo " Personal data added <br/>";
		
	}
}
?>