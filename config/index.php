<!DOCTYPE html>
<?php

?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>YCR Job Search</title>
       <!-- <style>
            body {
                font-family: Arial;
                font-size: 14px;	
                padding-right: 0px;
                padding-left: 0px;
                padding-top: 0px;
                padding-bottom: 0px;
                margin: 0px
            }


            .topDiv {
                background-color: #f1f1f1;
                border-bottom: 1px solid #e5e5e5;
                height: 70px;
                width: 100%;
                padding-left: 10px;
            }

            .field {
                float:left;
                width:500px;
                height:27px;
                line-height:27px;
                text-indent:10px;
                font-family:arial, sans-serif;
                font-size:1em;
                color:#333; /*grey*/
                background: #fff;
                border:solid 1px #d9d9d9;
                border-top:solid 1px #c0c0c0;
                border-right:solid 1px #c0c0c0;
                outline: none;
            }

            /* Style the "X" text button next to the search input field */
            #delete {
                float:left;
                width:16px;
                height:29px;
                line-height:27px;
                margin-right:15px;
                padding:0 10px 0 10px;
                font-family: "Lucida Sans", "Lucida Sans Unicode",sans-serif;
                font-size:22px;
                background: #fff;
                border:solid 1px #d9d9d9;
                border-top:solid 1px #c0c0c0;
                border-left:none;
            }
            /* Set default state of "X" and hide it */
            #delete #x {
                color:#A1B9ED;
                cursor:pointer;
                display:none;
            }
            /* Set the hover state of "X" */
            #delete #x:hover {
                color:#36c;
            }
            /* Syle the search button. Settings of line-height, font-size, text-indent used to hide submit value in IE */
            #submit {
                cursor:pointer;
                width:70px;
                height: 31px;
                line-height:0;
                font-size:0;
                text-indent:-999px;
                color: transparent;
                background: url(/201308/View/images/ico-search.png) no-repeat #4d90fe center;
                border: 1px solid #3079ED;
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
            }
            /* Style the search button hover state */
            #submit:hover {
                background: url(/201308/View/images/ico-search.png) no-repeat center #357AE8;
                border: 1px solid #2F5BB7;
            }
            /* Clear floats */
            .fclear {clear:both}

            .searchText {
                color:#F63;
                font-family:Arial, Helvetica, sans-serif;
                font-size:22px;
                font-weight:100;
            }
            hr {
                color: #e5e5e5;
                width: 100%;
                border: 1px solid #e5e5e5;
            }
            .url {
                color: #0C3;
                font-size:12px;	
            }
            .title {
                font-size:14px;	
            }
            .desc {
                font-size:12px;	
            }
            #search_results {
                padding-right: 50px;
                padding-left: 50px;
                padding-top: 0px;
                padding-bottom: 0px;
            }


            /*Button*/
            .link-button{
                display: table;
                height: 31px;
                padding-left: 15px;
                font-size: 14px;
                line-height: 1em;
                color: #515153;
                background: url(/201308/View/images/sprites.png) 0px -205px  no-repeat;

            }

            .link-button span{
                display: block;
                height: 31px;
                margin-left: 5px;
                padding-left: 5px;
                padding-top: 7px;
                padding-right: 12px;
                background: url(/201308/View/images/sprites.png)  no-repeat right -166px;
            }

            .link-button:hover{
                color: #999;
       }
            </style>
            <link rel="stylesheet" type="text/css" href="/201308/View/stylesheets/StyleSheet.css">
            <script type="text/javascript">
                function clear() {
                    var b;
                    //  var textbox = document.Search_term.value ="";

                    if (document.p.Search_term.value == "") {
                        document.getElementById("search_results").innerHTML = "";
                        // alert("hello");
                    }
                }

            </script>-->
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
  <link href="stylesheets/colour.css" rel="stylesheet" type="text/css" />
        </head>
        <body onload="b = setInterval('clear()', 0);">


            <div class="topDiv">
                <div style="float: left;">
                    <img src="/201308/View/images/ycr.jpg" alt="ycr"></div>
                <br/>

                <!--<H2>Search for a Job</H2>--> 
                <div class="searchform">
    <form id="formsearch" name="p" method="get" action="index.php">
          <span>
              
          <input name="Search_term" class="editbox_search" id="editbox_search" maxlength="80" value="<?php $this; ?>" type="text" />
          </span>
              <input type="image" name="button_search" src="images/search.gif" class="button_search" alt="" />
        </form>
                <br/>          
                <div id="search_results">

                </div>
            </div>

            <!-- </div>-->

            <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script><!--javascript jquery library-->
            <script type="text/javascript" src="../View/scripts/Script.js"></script>
            <?php
        
             include_once ('../Model/search.php');
         

            $Search = new Search();
            $Search->Search();
            ?>
                
