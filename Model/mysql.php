<?php

class Mysql {


private $connection;
    /**
     * Query to perform
     */
  //  public $query;

  

    /**
     * Create new connection to database
     */
    public function connect() {
        //connection parameters
        
        /**  $host = 'localhost';
          $user = 'root';
          $password = '';
          $database = 'ycr';
        
         *$host = 'mysql7.000webhost.com';
         *$user = 'a6042555_zero';
         *$password = 'Password01';
         *$database = 'a6042555_YCR'; 
         
        $host = 'mysql7.000webhost.com';
         $user = 'a6042555_zero';
         $password = 'Password01';
         $database = 'a6042555_YCR';
        //create new mysqli connection
        $this->connection =  mysql_connect
                (
                $host, $user, $password 
        );
      $this->connection = mysql_select_db($database);
        
        
    }*/
//connection parameters
        $host = 'itstudents.dut.ac.za';
        $user = '201308';
        $password = '5AcraSwA';
        $database = '201308';

        //your implementation may require these...
       // $port = '3306';
       // $socket = NULL;    
    
        //create new mysqli connection
         mysql_connect
        (
            $host , $user , $password 
        )  or die(mysql_error());                      
        
        mysql_select_db($database)  or die(mysql_error());
    }

    public function disconnect() {
        //clean up connection!
          mysql_close();       
    }

   /* public function query() {
        if (isset($this->query)) {
            $this->result = $this->connection = mysql_query($this->query);

            return true;
        }
        return false;
    }*/

}

?>