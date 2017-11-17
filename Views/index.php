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
<div class="main">
        <!-- Login and Registration Buttons/Links -->
     <div class="container">
	 <div class="row">
<nav>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
	<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</nav>
</div>
</div>
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
</div>
        <!-- Search Bar -->
        <div class="container">
            <div class="row">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="search">Search Comic Royale:</label>
                        <input type="search" class="form-control" id="searchPlaceholder" placeholder="What would you like to look for?">
                    </div>
                </form>
            </div>
        </div><!-- end of Search bar container -->
		<br>
        <!-- Banner with logo -->
        <div class="container">
            <a href="index.php"><img src="Images/logoBanner.png" alt="Comic Royale Logo & Banner"/></a>
        </div>
<br>
        <!-- Genre links -->
        <div class="container">
            <button type="button">Horror</button>
            <button type="button">Action</button>
            <button type="button">Comedy</button>
            <button type="button">Drama</button>
            <button type="button">Sci-Fi</button>
        </div>
<br>
        <!-- Carousel -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important;">
                            <div class="item active">
                                <img src="Images/wolverine.jpg" alt="Wolverine">
                                <div class="carousel-caption">
                                    <h3>Wolverine</h3>
                                    <p>Original comic for sale in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/archie.jpg" alt="Archie">
                                <div class="carousel-caption">
                                    <h3>Archie</h3>
                                    <p>Original Archie comics in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/marvel.jpg" alt="Marvel">
                                <div class="carousel-caption">
                                    <h3>Marvel</h3>
                                    <p>Original Marvel comics in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/captainAmerica.jpg" alt="Captain America">
                                <div class="carousel-caption">
                                    <h3>Captain America</h3>
                                    <p>Original Captain America comics in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/madMagazine.jpg" alt="Mad Magazine">
                                <div class="carousel-caption">
                                    <h3>Mad Magazine</h3>
                                    <p>Original Mad Magazine in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/starWars.jpg" alt="Star Wars">
                                <div class="carousel-caption">
                                    <h3>Star Wars</h3>
                                    <p>Original Star Wars comics in good to great condition</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="Images/silverSurfer.jpg" alt="Silver Surfer">
                                <div class="carousel-caption">
                                    <h3>Silver Surfer</h3>
                                    <p>Original Silver Surfer comics in good to great condition</p>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
<br>
        <!-- Table of Latest Releases and Most Popular -->
        <div class="container">
            <div class="row">
                <div class="sm-col-2"></div>
                <!-- Latest Releases -->
                <div class="sm-col-5">
                    <h2>Latest Releases</h2>
                    <p>A list of Latest Releases and Most Popular to be coming soon.</p>
                </div>
                <!-- Most Popular -->
            </div>
        </div> 
        <!-- end of latest releases and most popular container -->
    <br>
    <!-- Pagination -->
        <div class="container">
            <ul class="pagination">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="sponsors.html">Sponsors</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
<br>
        <!-- Footer -->
        <footer>
            <p><a href="#">Site Map </a><a href="#">| Privacy Statement</a></p>
            <p><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"> 2017 Comic Royale</span></p>
        </footer>
    </div> <!-- end of .main container -->
</body>
</html>
