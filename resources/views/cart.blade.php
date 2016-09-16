<!DOCTYPE html>
<html>
<head>
    <title>Mavericks Inc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://bootswatch.com/darkly/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/animate.css">
    <link rel="stylesheet" href="../public/css/style.css">
	
	<style>
	
		.cart{
			margin-top: 50px;
		}
		
		.cartItems{
			background-color: rgba(211, 211, 211, 0.15);
		}
		
		#cartHeading{
			font-size: 3em;
			color: #c5c5c5;
			margin-bottom: 30px;
		}
		
		.cartSummary{
			background-color: white;
		}
		
		#summaryHeading{
			color: black;
			font-size: 1.5em;
			padding-top: 10px;
			border-bottom: 3px solid black;
		}
		
		.ticketSummary:nth-of-type(1){
			padding-top: 20px;
		}
		
		.ticketSummary{
			color: black;
		}
		
		.totalPrice{
			padding-top: 10px;
			border-top: 1px solid gray;
			color:black;
			font-weight: bold;
		}
		
		.checkoutButton{
			margin-top: 10px;
			margin-bottom: 20px;
			background-color: black;
		}
		
	</style>
	
</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navToggle" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navToggle">

            <ul class="nav navbar-nav">
			<li><a href="{!! url('/') !!}">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">QuickTix
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="#" data-toggle="modal" data-target="#cinemaModal">Search by Cinema</a></li>
				  <li><a href="#" data-toggle="modal" data-target="#movieModal">Search by Movie</a></li>
				</ul>
			</li>
			<li><a href="#">Movies</a></li>
			<li><a href="#">Cart</a></li>
            </ul>

            <div class="col-sm-3 col-md-3 col-lg-5">
                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="cinemaModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cinema Search</h4>
      </div>
	  
      <div class="modal-body">
        <form class="form-horizontal" role="form" id="ticketform">
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Cinema:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
					 <option selected disabled hidden style='display: none' value=''></option>
						<option>Melbourne Central</option>
						<option>Watergardens</option>
						<option>Northlands</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Movie:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Session:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
						<option selected disabled hidden style='display: none' value=''></option>
						<option>Monday, 2-5pm</option>
						<option>Wednesday, 5-7pm</option>
						<option>Friday, 8-10pm</option>
					</select>
				</div>
			</div>
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Buy Tickets</button>
      </div>
    </div>

  </div>
</div>

<div id="movieModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Movie Search</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" id="ticketform">
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Movie:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Cinema:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
					 <option selected disabled hidden style='display: none' value=''></option>
						<option>Melbourne Central</option>
						<option>Watergardens</option>
						<option>Northlands</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="subject"><p>Select Session:</p></label>
				<div class="col-sm-9">
					<select class="form-control input-sm" id="os" name="os">
						<option selected disabled hidden style='display: none' value=''></option>
						<option>Monday, 2-5pm</option>
						<option>Wednesday, 5-7pm</option>
						<option>Friday, 8-10pm</option>
					</select>
				</div>
			</div>
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Buy Tickets</button>
      </div>
    </div>

  </div>
</div>


<div class="container">
	<div class="row cart">
		<div class="col-lg-6 cartItems">
			<p id="cartHeading">Shopping Bag</p>
			<div style="padding-bottom:20px;">
				<img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="150" height="200">
				<div style="float:right;margin-right:150px;">
					<p>Movie: X-MEN APOCALYPSE</p>
					<p>Cinema: Melbourne Central</p>
					<p>Session Time: Wednesday, 5-7pm</p>
					<p>First Class Ticket: 2</p>
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-lg-offset-1 cartSummary">
			<p id="summaryHeading">Order Summary</p>
			<p class="ticketSummary">Standard Adult: <span id="sd">7</span></p>
			<p class="ticketSummary">Standard Concession: <span id="sc">5</span></p>
			<p class="ticketSummary">Standard Child: <span id="schild">1</span></p>
			<p class="ticketSummary">First Class Adult: <span id="fca">4</span></p>
			<p class="ticketSummary">First Class Child: <span id="fcc">3</span></p>
			<p class="totalPrice">Total: $<span>79</span> AUD</p>
			<button type="submit" class="col-lg-12 btn btn-default btn-md checkoutButton">PROCEED TO CHECKOUT</button>
		</div>
	</div>
</div>



<footer class="container">
    <p>
        <b>RMIT University</b>
        <br>Written by: Ibrahim Tarek (s3521542), Dylan Aird (s3249319), Nicholas Zuccarelli (s3546815), Singh Avtar
        (s3530196)
        <br/><i>for Web Database Applications (WDA)</i>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>