<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <!-- Add icon link -->
    <link rel="icon" href="favicons/church2.png" style="width: 25px; height: 25px; border-radius: 2px">

    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="aboutus.css">
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
                        <a class="nav-link active" href="About_Us.php">About Us</a>
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
                            <a class="dropdown-item" href="#Our story">Our Story</a>
                            <a class="dropdown-item" href="#groups">Church Groups</a>
                        </div>
                    </li>

                    <!-- The search bar  -->
                    <div class="sbar" style="margin-left: 100px;">
                        <nav class="navbar navbar-expand-sm navbar-dark">
                            <form class="form-flex" action="#" style="display: flex;">
                                <input class="input-group" type="text" placeholder="Search" style="float: left; margin-right: 5px; border-radius: 10px; margin-top: 10px; margin-bottom: auto">
                                <input type="submit" value="Submit" style="background-color: forestgreen; float: right; border-radius: 10px">
                            </form>
                        </nav>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- About Us -->
<div style="margin-bottom: 0">
    <img src="images/int3.jpg" alt="i" width="100%" height="350">
    <div class="text-center" style="transform: translate(0, -100%); top: 30%; bottom: 40%; padding: 20px; font-family: Verdana,sans-serif; ">
        <h1 style="font-weight: bold; color: white; font-size: 5vmin">About Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at consectetur, cum dolor fuga harum id nihil
            nobis non omnis, quia quos repellat vitae! Blanditiis enim laboriosam non porro sunt.</p>

        <button id="id" style="width: 10%; padding: 5px; border-radius: 10px; background-color: blue">
            <a href="#" style="color: whitesmoke; font-weight: bolder">About Us</a>
        </button>
    </div>
</div>

<!-- Our Mission and Vision -->
<!-- The Our Mission -->
<div id="vim" style="margin-top: -10%; margin-bottom: 5%; background-color: #f2f2f2; padding: 10px">
    <!-- The Our Mission Header -->
    <h1 class="text-center" id="mis" style="font-size: 5vmin; font-weight: bold; font-family:Verdana,sans-serif">Our Mission</h1>
    <!-- To make the section fall side by side use the section and article and the div -->
    <section style="display: flex; padding: 5px">
        <!-- Style the Our Mission Article -->
        <article style="float: left; padding: 20px; width: 70%;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea id illo incidunt nihil rerum? Error libero possimus ratione repudiandae? Consectetur, consequatur ipsa natus nihil nisi nostrum odio quas repellat temporibus.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea id illo incidunt nihil rerum? Error libero possimus
                    ratione repudiandae? Consectetur, consequatur ipsa natus nihil nisi nostrum odio quas repellat temporibus.
                </p>
        </article>

        <!-- Style the image of our News Section -->
        <div id="news" style="float: left; width: 30%;">
            <!-- The community outreach -->
            <img id="imgd" src="images/menstraal.jpg" alt="" width="100%" height="150">
            <!-- The News Link -->
            <p style="font-size: 1.75vmin"><i>To live upto our vision and mission, our priests have been at the forfront in ....Read more in
                    <a href="https://www.aciafrica.org/news/3618/how-a-kenyan-catholic-priest-is-fostering-menstrual-hygiene-among-girls-in-schools">
                        The catholic news section</a></i></p>
        </div>
    </section>
    <!-- Last section of the mission -->
    <div style="width: 100%">
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at deserunt quia quos. Ab consequatur id laboriosam, molestiae molestias nihil porro quibusdam quod sunt ullam unde ut, vel veritatis voluptates.</span></p>
    </div>
</div>

<!-- The our vision section -->
<div class="text-center" id=" vis" style="margin-top: 20px">
    <h1 style="font-size: 5vmin; font-weight: bold">Our Vision</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facere ipsam molestiae placeat tenetur? A
        adipisci asperiores autem blanditiis deleniti dolor dolore explicabo laboriosam maiores nulla quae, quis
        repellendus voluptate.</p>
</div>

<!-- Our Story -->
<div class="row" id="Our story" style="background-image: url('images/images (8).jpeg'); background-size: cover; background-repeat: no-repeat; margin-top: 50px; margin-left: auto; margin-right: auto;">
    <div class="col-sm-7" style="padding: 20px">
        <h2 class="text-center" style="color: #95999c; font-weight: bold; font-family: Verdana,sans-serif; font-size: 5vmin">Our Story</h2>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum facilis laboriosam minima natus reiciendis! Fugiat itaque quam recusandae? Autem dicta et expedita minima, natus numquam officia qui suscipit ullam voluptates.</span><span>Accusantium aliquam assumenda blanditiis cumque cupiditate delectus error fuga fugiat id in magnam nisi omnis, ratione sunt temporibus tenetur voluptates. Ab amet eius illum nostrum reiciendis tempora vel, voluptatem voluptatibus.</span><span>Aspernatur blanditiis cum deleniti dolores dolorum ex illo impedit ipsa ipsam labore magnam maiores molestiae officiis quam quas rerum sint, totam ullam vitae, voluptate. Ab omnis quasi quisquam tempora veritatis?</span><span>Ab, atque autem dicta ducimus eum repellat temporibus vel. Assumenda fuga id illo illum quae. Adipisci aliquam architecto atque blanditiis culpa, enim ex harum illo, illum iste nemo non rem?</span><span>Ad adipisci alias animi, cupiditate delectus deleniti dignissimos eius eos exercitationem in ipsam libero nemo nobis, odit officia officiis omnis optio pariatur quidem, repellat repellendus soluta tempora vel velit voluptatem.</span><span>A ab alias aliquam animi at autem consequuntur cupiditate deserunt dignissimos ex hic illum impedit in ipsa nemo omnis perspiciatis, rem sint suscipit ullam velit veritatis voluptate. Eligendi, ipsam molestiae.</span><span>Adipisci animi commodi debitis delectus distinctio dolores eaque earum enim fugiat illum iusto quaerat quia, rem sapiente sint tempora veniam veritatis. Consectetur, debitis earum eos fugiat harum labore quo veritatis.</span><span>A consectetur doloribus nihil saepe. Accusantium alias animi dicta fugit, ipsum maiores odit pariatur, praesentium quibusdam, quos reiciendis sit veritatis vero! Aliquam aut eius eligendi explicabo minus ut vel, veniam!</span><span>Optio possimus, qui. A aut commodi consequatur cum dolore eligendi enim esse, est et laboriosam neque nihil, obcaecati possimus quam ratione, vitae voluptate. Autem commodi consequatur distinctio harum molestias quis!</span>
        </p>
        <!-- Read more button -->
        <button style="float: right; border-radius: 10px; padding: 4px 8px; background-color: black ">
            <a href="#" style="color: white">Read more...</a>
        </button>
    </div>
</div>

<!-- Contribute your tithe form -->
<div id="f1" style="margin: 10px 20%; padding: 20px">
    <div style="box-sizing: border-box; border: 1px solid black; background-color: #0d6efd; border-radius: 10px">
        <form class="" action="#" method="POST" style="margin: auto; padding: 20px">
            <h1 class="text-center" style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 4vmin">Support Our Church Projects</h1>

            <!-- The First Name Section -->
            <div class="row" id="row">
                <!-- The First Name Label -->
                <div class="col-25" id="lbl" style="display: inline; margin-left: 15px;">
                    <label for="fname">First Name</label>
                </div>
                <!-- The First Name Input Field -->
                <div class="col-75" id="input">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>

            <!-- The Last Name Section -->
            <div class="row" id="row">
                <!-- The Last Name Label -->
                <div class="col-25" id="lbl" style="margin-left: 15px">
                    <label for="lname">Last Name</label>
                </div>
                <!-- The Last Name Input Field -->
                <div class="col-75" id="input">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <!-- The Email Section -->
            <div class="row" id="row">
                <!-- The Email Label -->
                <div class="col-25" id="lbl" style="margin-left: 15px">
                    <label for="email">Email</label>
                </div>
                <!-- The Email Input Field -->
                <div class="col-75" id="input">
                    <input type="email" id="email" name="email" placeholder="Your email address..">
                </div>
            </div>

            <!-- The Group Section -->
            <div class="row" id="row">
                <!-- The Group Label -->
                <div class="col-25" id="lbl" style="margin-left: 15px">
                    <label for="group">Group</label>
                </div>
                <!-- The Groups Input Field -->
                <div class="col-75" id="input">
                    <select id="group" name="group">
                        <option value="Choir">Choir</option>
                        <option value="Rosary">Rosary</option>
                        <option value="Legion">Legion of Mary</option>
                    </select>
                </div>
            </div>

            <!-- The Small Christian Community  Section -->
            <div class="row" id="row">
                <!-- The Christian Community Label -->
                <div class="col-25" id="lbl" style="margin-left: 15px">
                    <label for="group">Christian Community</label>
                </div>
                <!-- The Christian Community Input Field -->
                <div class="col-75" id="input">
                    <select id="group" name="group">
                        <option value="Choir">St. Charles Lwanga Urinda</option>
                        <option value="Rosary">St. Anne Lifunga</option>
                        <option value="Legion">St. Mary Diraho</option>
                    </select>
                </div>
            </div>

            <!-- The Pay With  Section -->
            <div class="row" id="row" style="margin: auto">
                <!-- The Pay With Label -->
                <div class="col-25" id="lbl" style="margin-left: 15px">
                   <label for="Pay with">Pay With</label>
               </div>
                <!-- The Pay With Input Field -->
                <div class="col-75" id="input" style="">
                    <!-- The M-pesa Button -->
                   <button class="btn-sm" type="button" style="width: 32%; font-family: Verdana,sans-serif; font-size: 2.5vh; font-weight: bold">
                       <a href="#" style="text-decoration: none">Mpesa</a>
                   </button>
                    <!-- The Pay Pal Button -->
                   <button class="btn-sm" type="button" style="width: 32%; font-family: Verdana,sans-serif; font-size: 2.5vh; font-weight: bold">
                       <a href="#" style="text-decoration: none">PayPal</a>
                   </button>
                    <!-- The Mastercard Button -->
                   <button class="btn-sm" type="button" style="width: 32%; font-family: Verdana,sans-serif; font-size: 2.5vh; font-weight: bold">
                       <a href="#" style="text-decoration: none">MasterCard</a>
                   </button>
               </div>
           </div>

            <!-- The Submit Button and Input Field-->
            <div class="row" id="row">
                <div class="submit" >
                    <input type="submit" value="Submit">
                </div>
            </div>

        </form>
    </div>
</div>


<!-- the church groups -->
<div class="row" style="margin: auto; background-color: #abdde5; padding-top: 30px">
    <!-- the church groups section -->
    <div class="col-sm-8"  id="groups">
        <h1 class="text-center" style="font-size: 4vmin; font-weight: bold; font-family: Verdana,sans-serif; margin-bottom: 10px">Church Groups</h1>
        <!-- the church groups table -->
        <div class="table-responsive">
            <table class="table" id="groups" style="overflow: hidden">
                <!-- the table headers -->
                <tr>
                    <th class="text-center">Group</th>
                    <th class="text-center">Membership</th>
                    <th class="text-center">ChairPerson</th>
                    <th class="text-center">Patron</th>
                    <th class="text-center">Meeting</th>
                    <th class="text-center">Website</th>
                </tr>
                <!-- the choir -->
                <tr>
                    <td>Choir</td>
                    <td>100 Members</td>
                    <td>Mr. Ambros</td>
                    <td>Fr. Steve</td>
                    <td>Fridays, Saturdays 2.00 - 4.30 pm</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
                <!-- the legion of mary -->
                <tr>
                    <td>Legion Of Mary</td>
                    <td>50 Members</td>
                    <td>Mrs. Rose</td>
                    <td>Mrs. Brigit</td>
                    <td>Sunday 11.00 am</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
                <!-- the monica widows group -->
                <tr>
                    <td>Monica Widows</td>
                    <td>75 Members</td>
                    <td>Mrs. Beatrice</td>
                    <td>Mrs. Margaret</td>
                    <td>Wednesday  4.00 pm</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
                <!-- the catholic women association -->
                <tr>
                    <td>CWA</td>
                    <td>150 Members</td>
                    <td>Mrs. Colleta</td>
                    <td>Mrs. Dorcas</td>
                    <td>Monthly</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
                <!-- the youth group -->
                <tr>
                    <td>The Youth</td>
                    <td>150 Members</td>
                    <td>Mr. Agilo</td>
                    <td>Fr. Kevin</td>
                    <td>Sunday 11.00 am</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
                <!-- the parish groups -->
               <tr>
                   <td>Parish Council</td>
                   <td>30 Members</td>
                   <td>Mr. Gabriel</td>
                   <td>Fr. Fred</td>
                   <td>Monthly</td>
                   <td><a href="#">Click here...</a></td>
               </tr>
                <!-- the catholic men association group -->
                <tr>
                    <td>CMA</td>
                    <td>100 Members</td>
                    <td>Mr. Gabriel</td>
                    <td>Fr. Oliver</td>
                    <td>Monthly</td>
                    <td><a href="#">Click here...</a></td>
                </tr>
            </table>

            <div style="font-family: Verdana.sans-serif">
                <p>To learn more about our church groups, click the next to the group of your choice and proceed to learn more, you can also
                register for any group by filling in the registration form in the group. Look out for more groups  <a href="#"><b>here... </b> </a></p>
            </div>
        </div>
    </div>

    <!-- The sign up form -->
    <div class="col-sm-4 row" id="sign"  style="margin-right: auto">
        <div style="padding: 20px; box-sizing: border-box; border: 1px solid grey; border-radius: 5px; margin-left: 20px">
            <!-- the signup header -->
            <h1 class="text-center" style="font-family: Verdana,sans-serif; font-weight: bold; font-size: 4vmin">Sign into Your Group</h1>
            <!-- the sign up  form -->
            <form class="form-inline" action="#" method="POST">
                <!-- your first name -->
                <div class="col-25">
                    <label for="firstname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="firstname" name="firstname" placeholder="Your First Name..." required>
                </div>

                <!-- your last name -->
                <div class="col-25">
                    <label for="lastname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lastname" name="lastname" placeholder="Your Last Name..." required>
                </div>

                <!-- your groups -->
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

                <!-- email -->
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email..." required>
                </div>

                <!--password -->
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" placeholder="Enter Password...">
                </div>

                <!-- Forget Password -->
                <div style="margin-top: 10px">
                    <h6>Forget Password <a href="#">click here</a></h6>
                    <h6>If you don't belong to and group <a href="#">click here</a> to register for one</>
                </div>

                <!-- the submit button -->
                    <div class="justify-content-center" id="sub" style="">
                        <input type="submit" value="submit">
                    </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
<?php


?>