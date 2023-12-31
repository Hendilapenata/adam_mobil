<?php
require "config/db.php";


?>


<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css./singup.css">

    <title>Create Account</title>
</head>
<body>
    <form action="index.php" method="$_POST">
    <div class="container">
        <img src="img/logo1.png" class="logo" alt="">
        <div>
            <input type="text" autocomplete="off" id="name" placeholder="name">
            <input type="email" autocomplete="off" id="email" placeholder="email">
            <input type="password" autocomplete="off" id="password" placeholder="password">
            <input type="text" autocomplete="off" id="number" placeholder="number">
            <input type="checkbox" checked class="checkbox" id="terms-and-cond">
            <label for="terms-and-cond">agree to our <a href="">terms and conditions</a></label>
            <br>
            <input type="checkbox" class="checkbox" id="notification">
            <label for="notification">recieve upcoming offers and events mails</a></label>
            <button class="submit-btn">create account</button>
        </div>
        <p>sudah punya akun?<a href="/login.php" class="link"> Login disini</a></p>
    </div><div class="alert-box">
        <img src="img/error" class="alert-img" alt="">
        <p class="alert-msg">Error message</p>
    </div>
</form>

    <script src="js/form.js"></script>

</body>
</html>