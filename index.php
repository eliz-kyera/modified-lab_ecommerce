<?php

require('./Settings/core.php');


if(isset($_SESSION["user_id"]) && isset($_SESSION["user_role"])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>

    <body>
        <h1>Lab 1</h1>
        <div class="btns">
            <a href="./Login/login.php"><button>Login</button></a>
            <a href="./Login/register.php"><button>Register</button></a>
            <a href="./Login/logout.php"><button type="submit" name="logoutBtn">Logout</button></a>
        </div>
    </body>
    </html>
    <?php
}
else{
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>

    <body>
        <h1> WELCOME!</h1>
        <div class="btns">
            <a href="./Login/login.php"><button style="color:black; text-decoration:none;">Login</button></a>
            <a href="./Login/register.php"><button>Register</button></a>
        </div>
    </body>
    </html>
    <?php

}