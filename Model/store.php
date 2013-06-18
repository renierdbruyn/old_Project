<?php
include("../Model/connection.php");
$clanmodel=new ClanModel;
$connect=new Connection;
$connect->connectivity();


Class ClanModel
{
 	private $clan;
 	private $result;
	function storeClan($clan)
	{
		$this->clan=$clan;
		$insert="INSERT INTO clan_list(clan) VALUES('$this->clan')";
		$result=mysql_query($insert);
		if(!$result)
		echo "Couldnt insert data ".mysql_error()."<br/>";
		else 
		echo " Clan added <br/>";
		//echo"<script>alert(\"YEAH!!!\");</script>";
	}
	
	function getClan()
	{
		$select="SELECT * FROM clan_list";
		$this->result=mysql_query($select);
		if(!$this->result)
		echo "Couldnt get clan data ".mysql_error()."<br/>";
		else
		echo "We got the data <br/>";
		
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