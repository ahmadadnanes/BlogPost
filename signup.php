<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main css files -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/singup.css">
    <!-- other css files -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/normal.css">
    <title>SignUp</title>
</head>

<body>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/blogger_black_logo_icon_147154.png" height="40px">
            </div>
            <nav>
                <div class="normal_nav" style="display: block;">
                    <ul>
                        <li>
                            <a href="index.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header -->

    <!-- start signup -->
    <section>
        <div class="container">
            <h2>SignUp</h2>
            <div class="form">
                <form action="php/sign.php" method="post">
                    <div class="username">
                        <input type="text" name="username" id="user" required placeholder="username">
                        <br>
                    </div>
                    <div class="user">
                        <input type="email" name="user" id="user" required placeholder="email">
                        <br>
                    </div>
                    <div class="password">
                        <input type="password" name="password" id="password" required minlength="8" placeholder="password">
                    </div>
                    <div class="submit">
                        <button>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_GET["msg"])) { ?>
                <div class="error">
                    <h3><?php echo "this email or username is already in use" ?></h3>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- end signup -->

    <!-- start footer -->
    <footer>
        <div class="footer-container">
            <div class="text">
                <h3>Follow Me</h3>
            </div>
            <div class="social">
                <ul>
                    <li><a href="https://www.linkedin.com/in/ahmad-istaitieh-64a635248/"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/ahmadadnanes"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- JS -->
    <script src="js/main.js"></script>
</body>

</html>