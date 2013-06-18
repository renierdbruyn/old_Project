<?php

/**
 * Simple Sexy PHP Login Script
 * 
 * A simple PHP Login Script without all the nerd bullshit.
 * Uses PHP SESSIONS, modern SHA256-password-hashing and salting
 * and gives the basic functions a proper login system needs.
 * 
 * @package SimplePHPLogin
 * @author Panique <panique@web.de>
 * @link https://github.com/Panique/PHP-Login/
 * @license GNU General Public License Version 3 
 */

/**
 * Additional notes for experienced PHP guys/girls:
 * This script got a big code makeover in September 2012 to make this script more professional
 * and extendable. The database connection is not created within the login class anymore, now we have own
 * classes for both things: database connection and login process. So you can easily write your
 * own classes while using the main db connection.
 * From now, we create a database connection and pass it to each new object we create
 * (Dependency Injection Pattern, by the way). This might look stupid, but it's really good stuff.
 */

/**
 * include the configs / constants for the database connection
 */
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

// start this baby and give it the database connection
$login = new Login($db);

// base structure
if ($login->displayRegisterPage()) {
        include("views/login/register.php");
} else {
    // are we logged in ?
    if ($login->isUserLoggedIn()) {
        echo'<link href="View/stylesheets/style.css" rel="stylesheet" type="text/css" />';
        echo ' <link href="View/stylesheets/colour.css" rel="stylesheet" type="text/css" />';
        include("views/login/logged_in.php");
        
        //include '../View/home.php';
       
        header('location:home.php');//include '../View/profile.php';
        // further stuff here
    } else {
        ?>
<!DOCTYPE HTML>
<html>

    <head>
        <title>YCR</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <!-- stylesheets -->
        <link href="../View/stylesheets/style.css" rel="stylesheet" type="text/css" />
        <link href="../View/stylesheets/colour.css" rel="stylesheet" type="text/css" />
        <link href="../View/stylesheets/formStyle.css" rel="stylesheet" type="text/css" />

        <!-- modernizr enables HTML5 elements and feature detects -->
        <script type="text/javascript" src="scripts/modernizr-1.5.min.js"></script>
        <script type="text/javascript" src="scripts/Script.js"></script>
        <script src="iframeEscape.js" language="JavaScript" type="text/javascript"></script>
    </head>

    <body>
        <div id="main">

            <div class="searchform">


                <a href="search.php" >Search for a job...</a>

                <div class="loginForm">
                    <?php if (!$login->isUserLoggedIn()) echo "<a href='index.php'>Login </a>"; ?>
                </div>
                <!-- begin header -->
                <header>
                    <div id="logo"><h1>YOU<a href="#">CHOOSE</a>RECRUIT</h1></div>

            </div>

            <nav>
                <ul class="sf-menu" id="nav">
                    <li><a href="../View/home.php" >Home</a></li>
                    <li><a href="../View/about.php" >About Us</a></li>
                    <li><a href="../View/services.php" >Services</a></li>
                    <li><a href="../View/search.php" >Job Search</a></li>
                    <li><a href="../View/consult.php" >Consultant</a></li>
                    <li><a href="../View/contact.php" >Contact</a></li>  
                    <?php if ($login->isUserLoggedIn()) echo "<li><a href='../View/profile.php' >Profile</a></li>"; ?>
                </ul>
            </nav>
        </header>
        <!-- end header --><?php
        //include ('../View/header.footer/header.php');
        // not logged in, showing the login form
        include("views/login/not_logged_in.php");
        //include("../View/home.php");
        
    }
}
