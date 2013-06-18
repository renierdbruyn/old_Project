<!DOCTYPE html>
<?php
require_once("config/db.php");
// class autoloader function, this includes all the classes that are needed by the script
// you can remove this stuff if you want to include your files manually
function autoload($class)
{
    require('classes/' . $class . '.class.php');
}
// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
//create a database connection
$db    = new Database();

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
        <link rel="stylesheet" type="text/css" href="stylesheets/StyleSheet.css">

    </head>
    <body onload="b = setInterval('clear()', 0);">

        <div id="site_content">
            <div id="blog_container">
                <div class="topDiv">
                    <div style="float: left;">
                        <img src="images/ycr.jpg" alt="ycr"></div>
                    <br/>

                    <!--<H2>Search for a Job</H2>--> 
                    <form action="search.php" method="get" name="p">

                        <input type="text" name="Search_term" id="go" class="field" value="<?php $this; ?>"/>
                        <input type="submit" name="search_results" id="submit" value="search_results" />
                        <!-- <a href='../index.php' > Go back to Home page<a/>-->
                    </form>
                    <br/>          
                    <div id="site_content">

                    </div>

                </div>
            </div>
        </div>
        <!-- </div>-->
        <?php
        include_once ('../Model/search.php');
        $Search = new Search();
        $Search->Search();
      
        include '../View/header.footer/Footer.php';
        ?>
                
