<?php
session_start();
$idn = "";
$idn = $_SESSION["id"];
$id = implode(" ", $idn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main css files -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/post.css">
    <!-- other css files -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/normal.css">
    <title>Post</title>
</head>

<body>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="img/blogger_black_logo_icon_147154.png" height="40px">
            </div>
            <nav>
                <div class="normal_nav">
                    <ul>
                        <li>
                            <a href="php/logout.php">logout</a>
                        </li>
                    </ul>
                </div>

                <div class="drop_nav">
                    <input type="image" src="img/bars-solid.svg" alt="" height="40px" id="nav-btn">
                    <ul id="drop-ul">
                        <li>
                            <a href="php/logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header -->

    <!-- start create post -->
    <section>
        <div class="container">
            <?php

            $html = "php/savePost?id='$id'";
            ?>
            <div class="form">
                <form action="php/savePost.php" method="post">
                    <div class="title">
                        <label for="title">
                            enter the title of your blog :
                        </label><br>
                        <input type="text" name="title" id="title" required><br>
                    </div>
                    <div class="blog">
                        <label for="blog">
                            enter the blog :
                        </label><br>
                        <textarea name="blog" id="blog" cols="30" rows="10" required></textarea>
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
    <!-- end create post -->

    <!-- JS -->
    <script src="js/main.js"></script>

</body>

</html>