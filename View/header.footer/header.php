
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

            <!-- end header -->
