<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQs</title>
    <!-- Add icon link -->
    <link rel="icon" href="favicons/church2.png" style="border-radius: 2px">

    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.0-dist/js/jquery-3.5.1.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
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
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 20%">
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
                        <a class="nav-link" href="ContactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faqs.php">FAQS</a>
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

<!-- the first section -->
<div class="text-center" style="background-color: cornflowerblue; padding: 30px;">
    <div>
        <h1 style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 5vmin">Have A Question ?</h1>
        <p style="font-family: Verdana,sans-serif">If you have any question you can ask below or enter what you are looking for?</p>
    </div>

    <!-- the search bar -->
    <div style="display: flex; -webkit-justify-content: center">
        <nav class="navbar">
            <form autocomplete="on" class="form-inline" action="#" style="width: 100%">
                <input class="form-control mr-sm-2 in1" type="text" style="padding: 6px 250px">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </nav>
    </div>
</div>

<div class="row" style="margin-bottom: 20px; margin-top: 20px">
    <!-- featured articles section -->
    <div class="col-sm-4">
        <!-- fetured articles -->
        <div style="">
            <h2 style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 4vmin">Featured Articles</h2>
            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Order of Dialy Service</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How can I book an appointment online?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Register to a small christian Community</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Where are you located ?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">When Did Kianja Become A Parish?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How Many Sub-Parishes fall under Kianja?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Prayer Requests...</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Currently Ongoing Projects In the Church</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Total Church membership...</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How Many Priests are in Kianja?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        </div>
    </div>

    <!-- mid section -->
    <div class="col-sm-4">
        <!-- latest articles section -->
        <div>
            <h2 style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 4vmin">Latest Articles</h2>
            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How Many Groups are in Kianja?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Who are the leaders of Kianja Parish?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How to the church benefit local community?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Dominion of Kianja Church...</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Any News from the Church...</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">How active is Kianja Parish Choir?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">What is the Mission of the church?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Is there any social ammenity nearby ?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Where can I submit my announcements to?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible1"  style="border: none; font-family: Verdana,sans-serif;">Do you conduct the services in English?</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <script>
                var coll = document.getElementsByClassName("collapsible1");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                    });
                }
            </script>
        </div>
    </div>

    <div class="col-sm-4">
        <div style="box-sizing: border-box; border: 2px solid darkgrey;  padding: 20px; font-family: Verdana,sans-serif; background-color: #ffe8a1">
            <div style="display: flex">
                <h1 style="font-size: 4vmin; font-weight: bold; float: left">Support</h1>
                <a href="ContactUs.php" class="support" style="float: right; margin-left: 35%">
                    <img class="support1" src="favicons/support.png" alt="s" width="50" height="50">
                </a>
            </div>
                <div style="margin-top: auto">
                    <p>
                        Dear Member do you experience any difficulties using our website or accessing our services? Don't hesitate to call us, You can click the
                        <a href="ContactUs.php"><b>Here</b></a> to reach out to us
                        and get assisted. Also if you there is a certain improvement we need to add to our website tells su in the feedback section. Welcome!
                    </p>
                </div>
        </div>

        <!-- quick links -->
        <div style="border: 2px solid darkgrey; margin-top: 10px; padding: 20px; font-family: Verdana,sans-serif">
            <h1 style="font-size: 4vmin; font-weight: bold; margin-left: 20px">Quick Links</h1>

            <div >
                <div style="display: flex; justify-content: space-around">
                    <a href="#">Home</a>
                    <a href="#" >Contact Us</a>
                </div>

                <div style="display: flex; justify-content: space-around; margin-top: 20px">
                    <a href="#">About Us</a>
                    <a href="#">FAQs</a>
                </div>

                </div>

        </div>

        <!-- tags section -->
        <div style="margin: auto; font-family: Verdana,sans-serif; padding: 10px">
            <h3 style="margin-bottom: 20px; font-weight: bold; font-size: 4vmin">Tags</h3>
            <!-- buttons -->
            <button type="button" style="margin: auto">
                <a href="#">Home</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">Contact us</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">About Us</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">Location</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">Events</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">Church Groups</a>
            </button>

            <button type="button" style="margin: auto">
                <a href="#">Projects</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Our Mission</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Priests</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Membership</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Mass</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Announcements</a>
            </button>

            <button type="button" style="margin-top: 5px">
                <a href="#">Prayer Requests</a>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <!-- your opinion -->
    <div class="col-sm-5">
        <form action="" id="feedback" class="form-row" style="display: inline-grid; width: 100%; margin-bottom: 20px; border: 0.5px solid gray; padding: 20px; background-color: gainsboro; border-radius: 5px">
            <h1 class="text-center" style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 4vmin">Your FeedBack</h1>
            <p class="text-center !">Give Us an opinion of what you think of our website by filing in the form below</p>

            <label for="firstname" id="label">First Name</label>
            <input type="text" name="firstname" id="firstname" style="" placeholder="enter first name..." required>

            <label for="lastname" id="label">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="enter last name..." required>

            <label for="email" id="label">Your Email</label>
            <input type="email" name="email" id="email" placeholder="your email address..." required>

            <label for="textarea" id="label">Message</label>
            <textarea name="massage" id="message" cols="30" rows="10" placeholder=" write your opinion..." required style="margin: 0 20px 0 20px; border-radius: 5px; border: 2px solid gray"></textarea>

            <div style="display: flex; align-items: center; justify-content: center">
                <input class="input" id="input" type="submit" name="submit" value="Submit" style="width: 30%; background-color: forestgreen;">
            </div>
        </form>
    </div>

    <!-- map -->
    <div class="col-sm-7">
        <div class="gmaps" style="margin: auto">
            <!-- map -->
            <iframe class="embed-responsive" id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127674.18612029993!2d34.75111304029541!3d0.002592340520763752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf207a994003332de!2sSt.%20Dominic%20Catholic%20church%20Kianja!5e0!3m2!1sen!2ske!4v1625929142754!5m2!1sen!2ske" width="100%" height="450" style="border:0; margin-bottom: 10px; border-radius: 5px" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- pagination -->
        <div style="padding: 20px; display: flex; justify-content: center; margin: auto">
            <nav aria-label="Page Navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="ContactUs.php" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="item">
                        <a class="page-link" href="home.php">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="About_Us.php">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="ContactUs.php">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="faqs.php">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- footer -->
<div class="row" style="font-family: Verdana,sans-serif; background-color: #23272b; padding: 20px; margin: auto">
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

</div>
</body>
<style>
    /* style the collapsible section */
    .collapsible1 {
        background-color: #e5e5e5;
        color: black;
        margin-top: 2px;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        outline: none;
        font-size: 15px;
    }
    .collapsible1:hover {
        background-color: #95999c;
    }
    .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
    /* styling the support section */
    .support1:hover {
        width: 60px;
        height: 60px;
    }
/* the containing div of the map*/
    .gmaps {
        position: relative;
        overflow: hidden;
        padding-bottom: 80%;
        margin-top: 10px;
    }
    /* the map iframe */
    .gmaps #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100% !important;
        height: 100%!important;
    }

/* the  leave us your opinion form */
    /* the labels */
    #label {
        font-family: Verdana,sans-serif;
        margin-left: 20px;
    }
    /* the input fields */
    #firstname, #lastname, #email {
        padding: 10px;
        margin: 0 20px 0 20px;
        border-radius: 5px;
    }
    /* the submit button */
    #input {
        margin-top: 10px;
        border-radius: 5px;
    }
    .input:hover {
        background-color: lightgreen;
    }
    /* the active page */
    .page-item .active {
        background-color: blue;
        color: white;
    }
    @media only screen and (max-width: 789px) {
        /* the containing div of the map */
        .gmaps{
            margin-bottom: 10px !important;
        }
        /* map iframe */
        .gmaps #map {
            height: 100% !important;
        }
        .in1 {
            padding: 3px 24px !important;
            width: 69%;
            margin-right: 5px;
        }
    }
    /* styling the support section */
    .support {
        margin-left: 50% !important ;
    }
    .support1:hover {
        width: 60px;
        height: 60px;
    }
</style>
</html>

<?php