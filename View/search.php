<!DOCTYPE html>
<?php
//include 'index.php';
require_once("config/db.php");

// class autoloader function, this includes all the classes that are needed by the script
// you can remove this stuff if you want to include your files manually
function autoload($class) {
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
//create a database connection
$db = new Database();

$login = new Login($db);
// are we logged in ?
if ($login->isUserLoggedIn()) {

    echo'<link href="View/stylesheets/style.css" rel="stylesheet" type="text/css" />';
    echo ' <link href="View/stylesheets/colour.css" rel="stylesheet" type="text/css" />';
    include("views/login/logged_in.php");
}

include ('../View/header.footer/header.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>YCR Job Search</title>       
        <script type="text/javascript">
            function clear() {
                var b;
                //  var textbox = document.Search_term.value ="";

                if (document.p.Search_term.value == "") {
                    document.getElementById("search_results").innerHTML = "";
                    // alert("hello");
                }
            }

        </script>
        <link href="../View/stylesheets/StyleSheet.css" rel="stylesheet" type="text/css" />
    </head>
    <body onload="b = setInterval('clear()', 0);">


        <div>
            <div style="float: left;">
                <h1>Job<a>Search</a></h1> </div>
            <br/>

            <!--<H2>Search for a Job</H2>--> 
            <form action="search.php" method="post" name="p" >

                <input type="text" name="Search_term" id="go" class="field" value="<?php $search_term ?>"/>
                <input type="submit" name="search_results" id="submit" value="search_results" />
            </form>
            <br/>          
         <div id="search_results">
              <!--   <iframe width="900" height="500" id="search_results" name="result" src="../Controller/search.src.php" > </iframe>-->
            </div>
              
           
        

        <!-- </div>-->

       <!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
      <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> javascript jquery library
     <script type="text/javascript" src="../View/scripts/Script.js"></script>-->
        <?php
        
        include_once ('../Controller/search.php');
        $Search = new Search();
        $Search->searchQuery();
         
        include '../View/header.footer/Footer.php';
        ?>
                
