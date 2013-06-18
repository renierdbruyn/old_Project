<?php
$connection= new Connection;
$connection->connectivity();
Class Connection
{
	private $host="itstudents.dut.ac.za";
	private $user="201308";
	private $password="5AcraSwA";
	public $connect;
	function connectivity()
	{
		$this->connect=mysql_connect($this->host, $this->user, $this->password);
		
		if(!$this->connect)
			echo "Connection not found ".mysql_error()."<br/>";
		else
		{
			echo "We got a connection <br/>";
			mysql_select_db("201308", $this->connect);
		}
			
			
	}
}
?>