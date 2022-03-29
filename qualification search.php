<!- Code Initiator - NAFEES IDREES Begin Date - jan 10 - 2022>

    <?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    session_start();
    require_once("dbcontroller.php");
    $db_handle = new DBController();

    ?>

    <HTML>

    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="assets/js/jquery.min.js"></script>
        <TITLE>qualification search</TITLE>

    </HEAD>

    <BODY>
        <div class="header">
            <a class="logo" href="index.php"> <img src="images/logo.jpg"> </a>

            <nav class="header-left">
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <div class="dropdown">
                        <a class="active" href="qualification search.php">qualification search</a>
                        <div class="dropdown-options">
                            <a href="compare.php"> compare </a>
                            <a href="courses.php"> courses </a>
                            <a href="collage.php"> collage </a>
                        </div>
                    </div>
                    <a href="reg.php" target="_blank"> Sign Up </a>
                    <a href="login.php"> Login </a>
                    <a href="contact.php" target="_blank">Contact</a>
                    <a href="feedback.php" target="_blank">Feedback</a>

                    </form>

                </div>

                </a>
        </div>
        </div>

        <div class="qualification search">qualification search</div>
        <!doctype html>
        <html lang="en">

        <head>

            <!-- Bootstrap CSS -->

        </head>

        <body>


            <?php

            if (isset($POST['submit'])) {

                if (!empty($_POST['lang'])) {
                    foreach ($_POST['lang'] as $selected) {
                        echo $selected . "<br>";
                    }
                }
            }
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>select qualification O/L or A/L</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-6">
                                        <label for=""></label>
                                        <div class="form-control mb-3">
                                            <select name="lang[]">
                                                <option> choose option</option>
                                                <option value="O/L"> O/L</option>
                                                <option value="A/L"> A/L</option>
                                            </select>
                                            <input type="submit" value="Submit" name="submit">

                                            <div class="search-right">
                                                <form class="search" method="POST" action="search.php" style=" margin:auto">
                                                    <input type="text" placeholder="Search.." name="search" id="SearchTxt">
                                                    <button type="button" id="searchBtn" name="searchBtn" onclick="sendsearchrequst()"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <div class="footer">
                                                <div class="footer-left">

                                                    <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br>
                                                    <i class="fa fa-mobile" style="font-size:20px"></i> 0771234567 <br>
                                                    <i class="fa fa-envelope" style=" font-size:15px"> </i> unibook@gmail.com
                                                </div>

                                                <div class="footer-center">
                                                    <i class="fa fa-facebook-official" style="color:blue; font-size:40px; margin: 5px"></i>
                                                    <i class="fa fa-instagram" style="color:magenta; font-size:40px; margin: 5px"></i>
                                                    <i class="fa fa-twitter-square" style="color:black; font-size:40px; margin: 5px"></i>
                                                    <br>
                                                    </a> <br>
                                                    &copy;2022-2025 copyright by UNI BOOK<br>
                                                    all rights reserved.<br>
                                                    Designed by Nafees Idrees!
                                                </div>

                                                <div class="footer-right">


                                                </div>

                                            </div>
                                            <script src="./js/search.js"></script>
                    
        </BODY>

        </HTML>