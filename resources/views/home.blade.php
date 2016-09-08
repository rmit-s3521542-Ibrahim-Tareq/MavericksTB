<!DOCTYPE html>
<html>
	<head>
		<title>Mavericks Inc</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="../public/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	</head>
	
	<body >
        
        <div class="container">
            <div class="row">
                <div class="logo col-lg-12"><img src="../public/img/logo.png"></div>
            </div>
        </div>    
        
		<!-- Navbar -->
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">

					<ul class="nav navbar-nav">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Movies</a></li>
					  <li><a href="#">Cart</a></li> 
					</ul>
					
					<div class="col-sm-3 col-md-3 col-lg-7">
						<form class="navbar-form navbar-right" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				  </div>
				</nav>
			</div>
		</div>
		
		<div id="myCarousel" class="carousel slide container" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="../public/img/deadpool.jpg" alt="deadpool">
			  <div class="carousel-caption">
				<h3>Deadpool</h3>
				<p>A former Special Forces operative turned mercenary is subjected to a rogue experiment that leaves him with accelerated healing powers, adopting the alter ego Deadpool.</p>
			  </div>
			</div>

			<div class="item">
			  <img src="../public/img/bourne.jpg" alt="bourne">
			  <div class="carousel-caption">
				<h3>Jason Bourne</h3>
				<p>The CIA's most dangerous former operative is drawn out of hiding to uncover more explosive truths about his past.</p>
			  </div>
			</div>

			<div class="item">
			  <img src="../public/img/batman.jpg" alt="batman">
			  <div class="carousel-caption">
				<h3>Batman v Superman: Dawn of Justice</h3>
				<p>Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.</p>
			  </div>
			</div>

			<div class="item">
			  <img src="../public/img/zoo.jpg" alt="zoo">
			  <div class="carousel-caption">
				<h3>Zootopia</h3>
				<p>In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.</p>
			  </div>
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
        
        <div class="container topMovies">
            <div class="row">
                <p id="topMovies-header">WHAT'S HOT</p>
                <div class="col-lg-3 boxHits" style="padding-left:0px;">
                    <img src="../public/img/squad.jpg" class="img-thumbnail" alt="suicidesquad" width="290" height="200">
                </div>
                <div class="col-lg-3 boxHits">
                    <img src="../public/img/sausage.jpg" class="img-thumbnail" alt="sausageparty" width="290" height="200">
                </div>
                <div class="col-lg-3 boxHits">
                    <img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="290" height="200">
                </div>
                <div class="col-lg-3 boxHits" style="padding-right:0px;">
                    <img src="../public/img/sully.jpg" class="img-thumbnail" alt="sully" width="290" height="200">
                </div>
            </div>
        </div>
        
        <div class="container newsBox">
            <div class="row">
                <div class="col-lg-5 newsBox-left">
                    <p>Don't be late,</p>
                    <p>Book your ticket now!</p>
                    <a href="#" class="ticket"><i class="book"></i>BOOK TICKET</a>
                </div>
                <div class="col-lg-7 newsBox-right">
                    <p id="newBoxRight-header">NEWS</p>
                    <p class="subheading">Get discount upto <strong>10%</strong> if you are a member!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <hr/>
                    <p  class="subheading">We are expanding!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
            </div>
        </div>
        
        <footer class="container">
            <p>
                <b>RMIT University</b>
                <br>Written by: Ibrahim (s3521542),  Dylan Aird (s3249319), Nicholas Zuccarelli (s3546815), Singh Avtar (s3530196)
                <br/><i>for Web Database Applications (WDA)</i>
            </p>
        </footer>  
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>