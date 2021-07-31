<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Add icon link -->
    <link rel="icon" href="favicons/church2.png" style="width: 25px; height: 25px; border-radius: 2px">

    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap-grid.css">
    <script src="bootstrap-4.6.0-dist/js/jquery-3.5.1.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.6.0-dist/js/popper.min.js"></script>
</head>
<body class="container-fluid">
<div style="background-color: #1b1e21; display: flex; margin-top: -10px">
    <!-- the navBar -->
    <div style="display: flex">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <!-- Brand -->
            <div style="display: flex; margin-left: 5px">
                <a class="navbar-brand" href="#">
                    <!-- the image -->
                    <img src="favicons/church2.png" alt="2" width="50" height="50">
                    <!-- the header -->
                    <h1 style="font-size: 3vmin; color: whitesmoke; font-weight: bold">ST.DOMNIC KIANJA CHURCH <br><i style="font-size: 12px; margin-top: 0">ARCHDIOCESE OF KISUMU</i>
                </a>
            </div>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 10%">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About_Us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ContactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faqs.php">FAQS</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Menu
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Our Location</a>
                            <a class="dropdown-item" href="#">Projects</a>
                            <a class="dropdown-item" href="#">Leadership</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- First Section -->
<div>
    <img src="images/env2.jpg" alt="a" width="100%" height="300">
    <div>
        <h1 class="text-center h" style="margin-top: -15%; font-size: 3.5vmax; font-weight: bold; font-family: Verdana,sans-serif; color: white">Contact Us</h1>
    <p class="text-center" style="color: white; font-family: Verdana,sans-serif; font-size: 3vmin">There are so many ways you can get in touch with us, Pick your favourite and get assisted quickly</p>
    </div>
</div>

<!-- The second section -->
<div class="row mid" style="background-color: #9fcdff; margin: 15% 0 30px 0; padding: 20px">
    <div class="col-sm-7 row" style="margin-left: auto">
        <form id="f1" action="#" method="POST" style="display: inline">
            <h2 class="text-center" style="font-family: Verdana,sans-serif;  font-weight: bold; font-size: 5vmin">Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem doloremque ea ex, excepturi fuga
                ipsum laborum, natus odio recusandae sed suscipit unde, vel. Facilis illo ipsa labore repellendus
                similique.</p>

            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>

                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>

                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>

                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email address..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="group">Group</label>
                </div>
                <div class="col-75">
                    <select id="group" name="group">
                        <option value="Choir">Choir</option>
                        <option value="Rosary">Rosary</option>
                        <option value="Legion">Legion of Mary</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row sub">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <div class="col-sm-5 text-center" style="padding: 20px">
        <div>
            <h3 style="font-family: Verdana,sans-serif; font-size: 3.5vmin; font-weight: bolder">Email Address</h3>
            <a href="#">
                <p style="font-family: Verdana,sans-serif">charlesmbandaochieng@gmail.com</p>
            </a>
        </div>
        <br>
        <div>
            <h3 style="font-family: Verdana,sans-serif; font-size: 3.5vmin; font-weight: bolder">Telephone Number</h3>
            <p style="font-family: Verdana,sans-serif">+254796774153 / +254719261759</p>
        </div>
        <br>
        <div>
            <h3 style="font-family: Verdana,sans-serif; font-size: 3.5vmin; font-weight: bolder">Physical Location</h3>
            <p style="font-family: Verdana,sans-serif">St. Domnic Kianja Catholic Church is located off Mamboleo Miwani Road, Guba Junction II</p>
        </div>
        <div></div>
    </div>
</div>

<!-- the favicons -->
<div class="justify-content-center" style="display: flex; margin-top: 30px; margin-bottom: 30px">
    <a href="#">
        <img class="fav" src="favicons/fb-cicle.png" alt="fb" width="30px" height="30px" style="margin-right: 10px">
    </a>
    <a href="">
        <img class="fav" src="favicons/gmail.png" alt="g" width="30px" height="30px" style="margin-right: 10px">
    </a>
    <a href="">
        <img class="fav" src="favicons/twitter-square.png" alt="t" width="30px" height="30px" style="margin-right: 10px; border-radius: 50%">
    </a>
    <a href="">
        <img class="fav" src="favicons/whatsapp-cicle.png" alt="w" width="30px" height="30px" style="margin-right: 10px">
    </a>
    <a href="">
        <img class="fav" src="favicons/phone-sms.png" alt="ps" width="30px" height="30px">
    </a>
</div>

<!-- map -->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127674.18612029993!2d34.75111304029541!3d0.002592340520763752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf207a994003332de!2sSt.%20Dominic%20Catholic%20church%20Kianja!5e0!3m2!1sen!2ske!4v1625929142754!5m2!1sen!2ske" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<!-- footer -->
<div class="row" style="font-family: Verdana,sans-serif; background-color: #23272b; padding: 30px; margin: auto">
    <div class="col-sm-3">
        <ul class="text-center" style="list-style: none; text-decoration: none">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="About_Us.php">About Us</a>
            </li>
            <li>
                <a href="ContactUs.php">Contact Us</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="faqs.php">FAQs</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-3">
        <ul class="text-center" style="list-style: none; text-decoration: none">
            <li>
                <a href="home.php">Our Mission</a>
            </li>
            <li>
                <a href="About_Us.php">Our Story</a>
            </li>
            <li>
                <a href="home.php">Our Priests</a>
            </li>
            <li>
                <a href="#">Our Church Groups</a>
            </li>
            <li>
                <a href="#">Our Activities</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-3">
        <ul class="text-center" style="list-style: none; text-decoration: none">
            <li>
                <a href="#">News</a>
            </li>
            <li>
                <a href="#">Achievements</a>
            </li>
            <li>
                <a href="#">Upcoming Projects</a>
            </li>
            <li>
                <a href="ContactUs.php">Physical Address</a>
            </li>
            <li>
                <a href="#">Sub-Parishes</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-3">
        <ul class="text-center" style="list-style: none; text-decoration: none">
            <li>
                <a href="#">Membership</a>
            </li>
            <li>
                <a href="#">Tithe</a>
            </li>
            <li>
                <a href="#">Appointment</a>
            </li>
            <li>
                <a href="#">Feedback</a>
            </li>
            <li>
                <a href="#">Announcements</a>
            </li>
        </ul>
    </div>

    <!-- Input copyrights -->
    <div class="align-content-center" style="color: white;">
        &copy;  All Rights Reserved <br>
        &trade; TradeMark International
    </div>
</div>

</body>
<style>
    input[type=text], [type=email], select, textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }
    .sub {
        justify-content: center;
    }

    label {
        margin: auto;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 20%;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .col-25 {
        float: left;
        width: 20%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .fav:hover {
        width: 40px;
        height: 30px;
    }

    @media only screen and (max-width: 789px) {
        .h {
            margin-top: -35% !important;
        }
        .mid {
            margin-top: 35% !important;
        }
        .col-25  {
            width: 100%;
           margin: auto;
        }
        .col-75 {
            display: inline;
            width: 100%;
            margin-right: 30px;
            padding: 6px;
            margin-top: 0;
        }
        input[type=submit] {
            width: 25%;
            padding: 4px;
        }
        .sub {
            display: flex;
           justify-content: center;
        }
        #f1 {
            margin: auto;
        }
    }
</style>
</html>




<?php

