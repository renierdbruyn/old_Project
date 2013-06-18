<?php

Class MemberModel
{
 	private $name;
	private $surname;
	private $phone;
	private $id;
	private $password;
 	
 	public $result;
 	
 	
 	function register($name, $surname, $phone, $id, $password)
	{
		$this->name=$name;
		$this->surname=$surname;
		$this->phone=$phone;
		$this->id=$id;
		$this->password=$password;
		
		$insert="INSERT INTO member(name, surname, phone, id_number, password) VALUES('$this->name','$this->surname','$this->phone','$this->id','$this->password')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert data ".mysql_error()."<br/>";
		else 
		echo " Member added <br/>";
	}

	
	function getMember($id, $password)
	{
	 	$this->id=$id;
	 	$this->password=$password;
	 	
		$select="SELECT name FROM member WHERE id_number='$this->id' && password='$this->password'";
		$this->result=mysql_query($select);
		if(!$this->result)
		echo "Couldnt get member data ".mysql_error()."<br/>";
		else
		echo "We got member data <br/>";
		
		while($data=mysql_fetch_array($this->result))
		{
			echo $data[0]." ".$data[1]."<br/>";
		}
		
		return $this->result;
	}
	
	function search($id)
	{
	 	
		$select="SELECT clan FROM clan_list WHERE clan_id='$id'";
		$this->result=mysql_query($select);
		if(!$this->result)
 		echo "Couldnt get clan data ".mysql_error()."<br/>";
 		else
 		echo "We got the data <br/>";
		
		$data=mysql_fetch_array($this->result);
		$clan=$data[0];
		
		return $clan;
	}
}

?>