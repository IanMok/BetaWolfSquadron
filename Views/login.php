<!DOCTYPE html>

<head>
    <title>CR Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="comicRoyale.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="shop.html">Shop</a></li>
      <li><a href="sponsors.html">Sponsors</a></li>
	  <li><a href="contact.html">Contact Us</a></li>
    </ul>
	</div>
	</nav>
</div>
</div>


<a href="index.php"><img src="Images/logoBanner.png" alt="Logo and Banner" /></a>

        <!-- login form; validate each field using regEx onSubmit-->
        <form class="form-horizontal" name=loginForm onsubmit=return(validateFields());>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>

    </div>

</body>
</html>
