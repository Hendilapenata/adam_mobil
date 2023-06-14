<?php
session_start();
include "config/db.php";
$email = "";
$password = "";
$err = "";
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == '' or $password == ''){
        $err .= "<li>silakan login terlebih dahulu </li>";
    }
    if(empty($err)) {
        $sql1 = " select * from user where email = '$email' ";
        $q1 = mysqli_query($con, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if($r1['password'] !=md5($password)) {
            $err .= "<li> Silakan registrasi!</li>";
        }
    }
    if(empty($err)) {
        $_SESSION['user'] = $username;
        header('location:index.php');
        exit();
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <img src="img/logo1.png" alt="">
    <br>
    <div class="container">
        <?php
            if($err) {
                echo "<ul> $err </ul>";
            }
        ?>

        <form action="" method="post" >
        <div>
            <input type="email" autocomplete="off" id="email" name="email" placeholder="email">
            <input type="password" autocomplete="off" id="password" name="password" placeholder="password">
            <button class="submit-btn" name="login">Login</button>
        </div>
        </form> 
        <p>belum punya akun?<a href="/signup.php" class="link"> registrasi</a></p>
    </div>
  
</body>
</html>