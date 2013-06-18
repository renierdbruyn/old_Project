<html>
    <head>
        <script>
            function validateForm()
            {
                var x = document.forms["job upload"]["name"].value;
                if (x == null || x == "")
                {
                    alert("job advert must be filled out");
                    return false;
                }
                var y = document.forms["job upload"]["desc"].value;
                if (y == null || y == "")
                {
                    alert("job description must be filled out");
                    return false;
                }
            }
        </script>
        <style>
            #gallery {
                height: 400px;
                overflow:hidden;
                padding-top:18px;
            }
            #gallery .viewport {
                float: left;
                width: 640px;
                height: 220px;
                overflow: hidden;
                position: relative;
            }
            #gallery .gallery_nav {
                padding-top:23px;
                height:45px;
                float:left;
            }
            #gallery .buttons {
                display: block;
                width:45px;
                height:45px;
                margin: 0 10px 0 0;
                float: left;
                background-position:left bottom;
                background-repeat:no-repeat;
                text-indent:-9999px
            }
            #gallery .buttons:hover {
                background-position:left top
            }
            #gallery .prev {
                background-image:url(../images/l_arrow.png)
            }
            #gallery .next {
                background-image:url(../images/r_arrow.png);
                margin-right:0
            }
            #gallery .buttons:hover {
                background-position:left top
            }
            #gallery .disable {
            }
            #gallery .overview {
                list-style: none;
                position: absolute;
                padding: 0;
                margin: 0;
                left: 0;
                top: 0;
            }
            #gallery .overview li {
                float: left;
                margin: 0 15px 0 0;
                width: 190px;
                height: 220px;
            }
            #gallery .overview li a {
                text-decoration:none;
            }
            #gallery .overview img {
                -webkit-border-radius: 15px;
                -moz-border-radius: 15px;
                border-radius: 15px;
            }
            div.wrapper {
                width:190px;
                height:220px;
                overflow:hidden;
                position:relative;
            }
            /*generic style for all div */
            div.caption {
                font-family:arial;
                font-weight:normal;
                font-size:14px;
                background-color:#000000;
                padding:15px 15px 0px 15px;
                min-height:205px;
                color:#ffffff;
                line-height:16px;
                text-decoration:none;
                position:relative;
                z-index:1111111111;
            }
            /*white fade*/
            ul li div.caption {
                font-weight:normal;
                font-size:13px;
                position:relative;
                opacity: .8;
                padding:15px 15px 0px 15px;
                min-height:205px;
                color:#ffffff;
                line-height:18px;
                text-decoration:none;
                -webkit-border-radius: 15px;
                -moz-border-radius: 15px;
                border-radius: 15px;
            }
            div.caption h4 {

                color:#FF6600;

            }
            div.caption a {
                font-weight:normal;
                line-height:18px;
                text-decoration:none;
            }
            div.caption a:hover {
                text-decoration:none;
            }</style>
        <!--<script> alert('Job advert added'); </script>-->
    </head>
    <body>
        <div id="gallery">
            <form name="job upload" action="upload.src.php" onsubmit="return validateForm();" method="post">
                <div class="gallery_nav">

                    <table>
                        <tr>
                            <td>Job Advert: </td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td><textarea name="desc"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submitJob"> <td></td>
                        </tr>

                    </table>
                </div>
            </form>   </div>
        <?php
        require_once ('classes/mysql.php');
        $db = new Mysql();
        $db->connect();
        if (isset($_POST['submitJob'])) {
            $sql = "INSERT INTO adverts (Adv_title, Adv_desc) VALUES ('$_POST[name]','$_POST[desc]')";

            if (mysql_query($sql) or die(mysql_error())) {
                echo "Job advert added";
                echo "<script> alert('Job advert added'); </script>";
                //header("location:ranking.php");
            }


            //echo "Job advert added";
            // echo "<script> alert('$sql'); </script>";
        }
        ?>
    </body>
</html> 