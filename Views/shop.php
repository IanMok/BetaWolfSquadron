<!DOCTYPE html>
<head>
    <title>Comic Royale</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="comicRoyale.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>


<body>

    <!-- Login and Registration Buttons/Links -->
    <div class="container" name="content">
        <div class="row">
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
                    <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </nav>


            <!-- NavBar -->
            <div class="container">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php">Comic Royale</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="sponsors.html">Sponsors</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- end of NavBarRow -->
        <!-- Main Content Block -->
        <!-- Coming Soon -->
        <div class="container" name="aboutContainer">

            <h1>COMIC ROYALE SHOP</h1>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1>Comic Royale Shop Coming Soon</h1>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div><!-- end of aboutContainer container -->
    </div><!-- end of content container -->
    <!-- Actual Content -->
    <section id="main-content-products">

        <div id="product-links">
            <p class="link-trail"><a href="index.php">Home</a> &#9658; <a href="shop.php" class="current-link">Shop</a></p>
        </div>
        <!-- Aside Content Block -->
        <div class="aside-content-block">
            <section class="product-article">

                <!-- item 1 -->
                <article>
                    <img src="../images/archie.jpg" width="240" height="240" class="comicImgs" alt="Archie Comics" />
                    <h2 class="product-article">Product 1</h2>
                    <p>
                        Archie<br /><br />
                        <a href="../images/archie.jpg" class="lmore-sml">Learn More</a>
                    </p>
                </article>

                <!-- item 2 -->
                <article>
                    <img src="../images/avengers.jpg" width="240" height="240" class="comicImgs" alt="Avengers Comics" />
                    <h2 class="product-article">Product 2</h2>
                    <p>
                        Avengers<br /><br />
                        <a href="../images/avengers.jpg" class="lmore-sml"> Learn More</a>
                    </p>
                </article>

                <!-- item 3 -->
                <article>
                    <img src="../images/captainAmerica.jpg" width="240" height="240" class="comicImgs" alt="Captain America Comics" />
                    <h2 class="product-article">Product 2</h2>
                    <p>
                        Captain America<br /><br />
                        <a href="../images/captainAmerica.jpg" class="lmore-sml"> Learn More</a>
                    </p>
                </article>
            </section>
        </div>




    </section>
</body>

</html>
