<?php
include "php/conn.php";
session_start();
$idn = "";
if (isset($_SESSION["id"])) {
    header("location: Home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main css files -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- other css files -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/normal.css">
    <title>login</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/blogger_black_logo_icon_147154.png" height="40px">
            </div>
            <nav>
                <div class="normal_nav" style="display: block;">
                    <ul>
                        <li>
                            <a href="signup.html">SignUp</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- start login -->
    <section>
        <div class="container">
            <div class="form">
                <form action="php/login.php" method="post">
                    <div class="user">
                        <label for="user">
                            Enter Your Email :
                        </label><br>
                        <input type="email" name="user" id="user" required placeholder="email">
                        <br>
                    </div>
                    <div class="password">
                        <label for="user">
                            Enter Your password:
                        </label><br>
                        <input type="password" name="password" id="password" required placeholder="password">
                    </div>
                    <div class="submit">
                        <button>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end login -->
    <!-- JS -->
    <script src="js/main.js"></script>
</body>

</html>