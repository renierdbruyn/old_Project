<?php

 require_once("config/db.php");
 class Job{
     
     function insert(){
         
    
     if(isset($_POST['submit']))
 $sql="INSERT INTO advert (adv_title, adv_desc)
 VALUES
 ('$_POST[adv_name]','$_POST[adv_desc]')";

 mysql_query($sql);
   
 echo "<script> alert('Job advert added'); </script>" ;
  }
 }
 ?>
