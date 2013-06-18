<?php

include_once '../Model/application.database.php';

class application {

   

    public function addApplicant() {
        if (isset($_POST['submit'])) {
         
           $result = new writeApplicant();
           $result->add();
           echo "<script> alert('you have successfully applied');</script>";            
        }
    }

}

?>
