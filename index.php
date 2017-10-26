<!DOCTYPE html>

<head>

<!-- Custom style CSS -->
	<link rel="stylesheet" href="comicRoyale.css" />


<!-- Bootstrap with CDN links -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Carousel -->
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  
</head>


<body>

<div class="container" name="content">

<!-- Login and Registration Buttons/Links -->
<div class="container"
<nav>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	</nav>
	</div>
	
<!-- NavBar -->	
<div class="container">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
		 </ul>      
		 </li>      
		 <li><a href="#">Page 2</a></li>
    </ul>
	</div>
	</nav>
</div>
<!-- Search Bar -->

<form class="form-inline" role="form">
	 <div class="form-group">
      <label class="search">Search:</label>
      <input type="search" class="form-control" id="ssearch placeholder="Search Comic Royale">
    </div>
</form>

<!-- Banner with logo -->



<!-- Genre links -->



<!-- Carousel -->

<h1>Carousel</h1>
<div class="container">
  <h2>Carousel Methods</h2>
  <p>The <strong>cycle</strong> method goes through the carousel items from left to right (slides automatically).</p>
  <p>The <strong>pause</strong> method stops the carousel from going through items.</p>
  <button type="button" id="myBtn" class="btn btn-success btn-lg" id="myBtn">Slide through items (cycle)</button>
  <button type="button" id="myBtn2" class="btn btn-danger btn-lg" id="myBtn">Stop slide (pause)</button><br><br>
  <div id="myCarousel" class="carousel slide" data-interval="500">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/wolverine.jpg" alt="Wolverine" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/archie.jpg" alt="Archie" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/captainAmerica.jpg" alt="Captain America" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/ironMan.jpg" alt="Iron Man" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  
<!-- Table of Most Popular -->



<!-- Footer -->



<!-- Pagination -->


</div> <!-- end of content container -->
<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel("pause");

    // Click on the button to start sliding 
    $("#myBtn").click(function(){
        $("#myCarousel").carousel("cycle");
    });

    // Click on the button to stop sliding 
    $("#myBtn2").click(function(){
        $("#myCarousel").carousel("pause");
    });
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

</body>
</html>