<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Add icon link -->
    <link rel="icon" href="favicons/church2.png" style="width: 25px; height: 25px; border-radius: 2px">

    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.css">
    <script src="bootstrap-4.6.0-dist/js/jquery-3.5.1.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.6.0-dist/js/popper.min.js"></script>

</head>
<body class="container-fluid" style="background-color: darkgray">
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
        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 20%">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About_Us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ContactUs.php">Contact Us</a>
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
                
                <!-- The favIcons -->
                <div class="abc" style="display: flex; margin-left: 50%">
                    <a href="">
                        <img src="favicons/phone.png" alt="q" width="15" height="20" style="margin-right: 10px">
                    </a>
                    <a href="">
                        <img src="favicons/gmail.png" alt="q" width="15" height="20" style="margin-right: 10px">
                    </a>
                    <a href="">
                        <img src="favicons/twitter-dark.png" alt="q" width="15" height="20">
                    </a>
                </div>
            </ul>
        </div>
        </nav>
    </div>
</div>

<!-- The mid column -->
<div class="row" style="margin-top: 20px">
    <div class="col-sm-7">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active item">
                    <img class="img-fluid img" src="images/env2.jpg" alt="o">
                </div>
                <div class="carousel-item item">
                    <img class="img-fluid img " src="images/int1.jpg" alt="e">
                </div>
                <div class="carousel-item item">
                    <img class="img-fluid img" src="images/env4.jpg" alt="e">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="col-sm-5">
        <div class="text-center" style="margin-bottom: 20px">
            <h1 style="font-size: 25px; font-weight: bold; font-family: Verdana,sans-serif">Our Mission</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda atque, fuga id in ipsum
                maxime natus necessitatibus nulla numquam perferendis quas quia saepe soluta ullam vel veniam voluptatem
                voluptatum!</p>
        </div>

        <div class="text-center" style="margin-top: 100px">
            <h1 style="font-weight: bold; font-family: Verdana,sans-serif; font-size: 25px">Our Priests</h1>
            <p>Lorem ipsum dolor sit</p>
            <p>Lorem ipsum dolor sit</p>
        </div>
    </div>
</div>

<!-- The footer -->
<div class="row" style="margin-top: 20px; box-sizing: border-box; margin-bottom: 50px">
    <!-- The first column -->
    <div class="col-sm-4" id="hd" style="border: 1px solid black; ">
        <!-- The header 1 -->
        <h1 class="text-center" style="font-size: 25px; font-family: Verdana,sans-serif; font-weight: bold; background-color: dodgerblue">
            Announcements
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi ex harum laudantium, libero maxime modi
            nam numquam, officia praesentium quidem quo sapiente, sequi temporibus vitae? Eos quaerat ratione ut?</p>
    </div>

    <!-- The mid-column -->
    <div class="col-sm-4" id="hd" style="border: 1px solid black">
        <!-- The upper section -->
            <div style="height: 200px">
                <h1 class="text-center" style="font-size: 25px; font-family: Verdana,sans-serif; font-weight: bold; background-color: dodgerblue">
                    Events
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur delectus ducimus illo inventore nisi
                    pariatur sapiente vero. Distinctio dolor id laborum minus nostrum numquam sapiente. Dicta ducimus explicabo
                    quas vero.</p>
            </div>
        <!-- The lower section -->
            <div>
                <h1 class="text-center" style="font-size: 25px; font-family: Verdana,sans-serif; font-weight: bold; background-color: dodgerblue">
                    Events
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur delectus ducimus illo inventore nisi
                    pariatur sapiente vero. Distinctio dolor id laborum minus nostrum numquam sapiente. Dicta ducimus explicabo
                    quas vero.</p>
            </div>
    </div>

    <!-- The last column -->
    <div class="col-sm-4" id="hd1" style="border: 1px solid black">
        <!-- The upper section -->
        <div style="height: 200px">
            <h1 class="text-center" style="font-size: 25px; font-family: Verdana,sans-serif; font-weight: bold; background-color: dodgerblue">
                Quick Links
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur delectus ducimus illo inventore nisi
                pariatur sapiente vero. Distinctio dolor id laborum minus nostrum numquam sapiente. Dicta ducimus explicabo
                quas vero.</p>
        </div>
        <div>
        <!-- The lower section -->
            <h1 class="text-center" style="font-size: 25px; font-family: Verdana,sans-serif; font-weight: bold; background-color: dodgerblue">
                Sign Up Today
            </h1>

            <!-- Log in form -->
            <form action="#" method="GET">
                <label for="name" id="name">First Name </label>
                <!--suppress HtmlFormInputWithoutLabel -->
                    <input type="text" name="name" placeholder="Enter Your Name">

                <label for="email" id="email">Email</label>
                    <input type="email" name="email" placeholder="Your Email Address...">

                <label for="password" id="password">Password </label>
                    <input type="password" name="password" placeholder="Enter your Password">

                <input type="submit" value="submit">
            </form>

        </div>
    </div>
</div>
</body>
<!-- styling -->
<style>
    .item { height: 400px}
    /* the carousel images */
    .item .img {
        width: 100%;
        height: 100%; ! important;
    }
    /* the sign up form */
    label {
        display: flex;
    }
    input [type=text], [type=email], [type=password] {
        width: 100%;
    }
    @media only screen and (max-width: 768px) {
        /* the fav icons */
        .abc {
            margin-left: 100%;
            margin-top: -30px;
        }
        /* the carousel images */
        .item .img {
            width: 100%;
            max-height: 75%; !important;
        }
        #hd {
            margin: 0 20px 30px 20px;
            box-sizing: border-box;
            border-radius: 5px;
        }
        #hd1 {
            margin: 0 20px;
            border-radius: 5px
        }
    }
</style>
</html>
