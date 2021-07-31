
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.js"></script>
</head>
<body>
<form action="" method="get" id="account" style="display: block;"  onsubmit="myfunction()">
    <label for="firstname" >First Name</label>
    <input type="text" name="first_name" id="f_name"> <br><br>

    <label for="lastname" >Last Name</label>
    <input type="text" name="last_name" id="l_name"> <br><br>

    <label for="email" >Email</label>
    <input type="email" name="email" id="email"> <br><br>

    <label for="password" >Password</label>
    <input type="password" name="password" id="password"> <br><br>

    <label for="password" >Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password"> <br><br>

    <input type="submit" value="submit">
</form>
</body>

</html>
<?php
$x = ('password'); $y = ('confirm_password');
if ('$x == $y') {
    echo "Your Password is correct";
} else {
    echo "Wrong Password, retype";
}
?>