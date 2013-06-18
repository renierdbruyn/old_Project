<!Doctype html>
<?php

class Mysql {


//private $connection;
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
         * 
         */
//connection parameters
        $host = 'itstudents.dut.ac.za';
        $user = '201308';
        $password = '5AcraSwA';
        $database = '201308';

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

}

?>