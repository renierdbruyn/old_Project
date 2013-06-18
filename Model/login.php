<?php
session_start();

Class LoginModel
{ 	
 	function login($username, $password)
	{
		$this->username=$username;
		$this->password=$password;
		
		$select="SELECT name, surname FROM member WHERE id_number='$this->username' && password='$this->password'";
		$this->result=mysql_query($select);
		//if(!$this->result)
		//echo "Couldnt get member data ".mysql_error()."<br/>";
		//else
		//echo "We got member/user data <br/>";
		$count=mysql_num_rows($this->result);
		// echo $count." results <br/>";
		$_SESSION['count']=$count;
		//echo $this->username." ".$this->password."<br/>";
		while($data = mysql_fetch_array($this->result))
 		{
 			//echo $data[0]."<br/>";
 			$name=$data[0];
 			$surname=$data[1];
 		}

		$_SESSION['name']=$name;
		$_SESSION['surname']=$surname;
		$_SESSION['username']=$this->username;
		
		echo $_SESSION['name']."<br/>";
		echo $_SESSION['surname']."<br/>";
		echo $_SESSION['username']."<br/>";
		if($count==1)
		{
			header("location:../VIEW/profile.php");
		}
	}
}
?>