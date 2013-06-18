<?php
//include 'index.php';<?php
//include_once '/Log/index.php';
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

include '../View/header.footer/header.php';
?>
<h1><a href="#">About</a> Us...</h1>
   <iframe width="950" height="690" src="../Controller/about.src.php" scrolling="no" frameborder="0" >
</iframe>

<?php
include '../View/header.footer/Footer.php';
?>
