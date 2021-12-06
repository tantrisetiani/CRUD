<?php

session_start();



if(!isset($_SESSION["login"])) {
    header("Location : index.php");
    exit;
}

require 'functions.php';
if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

    if(mysqli_num_rows($result)){
        $rows =mysqli_fetch_assoc($result);

        if(password_verify($password, $rows["password"])){

            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Login</h1>

    <?php if(isset($error)):?>
    <p style="color: red; font-style:italic">Username atau Password salah </p>

    <?php endif ?>
    <br>

    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>


    </form>
</body>

</html>
