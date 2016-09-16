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
    <link rel="stylesheet" href="../../../public/css/style.css">
	
	<style>
		.cinemaSession{
			border-bottom: 1px solid darkgray;
			padding-bottom: 30px;
		}	
		.table{
			margin-top: 30px;
		}
		.table td, th {
		   text-align: center;   
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
			<li><a href="{{ action('CartController@show') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
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

<!-- Modal -->
<div class="modal fade" id="tilesModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" onclick="resetFields()">&times;</button>
	  <h4 class="modal-title">Ticket Booking</h4>
	</div>
	
	<form role="form" id="ticketform" action="{!! url('/cart') !!}" method="post">
		<div class="modal-body">
			<div class="text-center row">
				<div class="col-lg-12" style="font-size:1.5em;">
					<p>Movie Name: <span id="namePlaceholder"></span></p>
					<input type="hidden" name="movieName" id="movieName">
				</div>
			</div>
			<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
			<div class="row cinemaSession" style="margin-top:20px;">
				<div class="col-lg-6">
					<p>Cinema location: </p>
					<select class="form-control input-sm" name="location">
						<option selected disabled hidden style='display: none' value=''></option>
						<option value="melbCentral">Melbourne Central</option>
						<option value="watergardens">Watergardens</option>
						<option value="northlands">Northlands</option>
					</select>
				</div>
				<div class="col-lg-6">
					<p>Session Time: </p>
					<select class="form-control input-sm" name="time">
						<option selected disabled hidden style='display: none' value=''></option>
						<option value="monday">Monday, 2-5pm</option>
						<option value="wednesday">Wednesday, 5-7pm</option>
						<option value="friday">Friday, 8-10pm</option>
					</select>
				</div>
			</div>
			
			<div class="row">
					<table id="bookingTable" class="table table-hover">
						<thead>
						  <tr>
							<th>Ticket Type</th>
							<th>Quantity</th>
							<th>Subtotal Price</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Child</td>
							<td><input type="number" name="child" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
							<td>$<span class="subtotalPrice resetMe">0.00</span></td>
						  </tr>
						  <tr>
							<td>Adult</td>
							<td><input type="number" name="adult" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
							<td>$<span class="subtotalPrice resetMe">0.00</span></td>
						  </tr>
						  <tr>
							<td>Seniors</td>
							<td><input type="number" name="senior" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
							<td>$<span class="subtotalPrice resetMe">0.00</span></td>
						  </tr>
						  <tr>
							<td>Concession</td>
							<td><input type="number" name="concession" min="1" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
							<td>$<span class="subtotalPrice resetMe">0.00</span></td>
						  </tr>
						</tbody>
					</table>
				<p class="text-right" style="font-size:2em;padding-top:10px;padding-right:50px;margin-bottom:-10px;">Grand Total: <span id="totalPrice" class="resetMe"></span></p>
			</div>
		</div>
	</form>
	<div class="modal-footer">
	  <button type="button" id="submitForm" class="btn btn-default">Add to cart</button>
	</div>
  </div>
  
</div>
</div>


<div class="container carousel-placeholder"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <h1 class="title"></h1>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(../public/img/large-banners/deadpool.jpg);">
            <img src="../public/img/deadpool.jpg" alt="deadpool">
            <div class="carousel-caption">
                <h3>Deadpool</h3>
                <p>A former Special Forces operative turned mercenary is subjected to a rogue experiment that leaves him
                    with accelerated healing powers, adopting the alter ego Deadpool.</p>
            </div>
        </div>

        <div class="item" style="background-image:url(../public/img/bourne.jpg);">
            <img src="../public/img/bourne.jpg" alt="bourne">
            <div class="carousel-caption">
                <h3>Jason Bourne</h3>
                <p>The CIA's most dangerous former operative is drawn out of hiding to uncover more explosive truths
                    about his past.</p>
            </div>
        </div>

        <div class="item" style="background-image:url(../public/img/large-banners/batman.jpg);">
            <img src="../public/img/batman.jpg" alt="batman">
            <div class="carousel-caption">
                <h3>Batman v Superman</h3>
                <h4>Dawn of Justice</h4>
                <p>Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the
                    world wrestles with what kind of a hero it really needs.</p>
            </div>
        </div>

        <div class="item" style="background-image:url(../public/img/large-banners/zootopia.png);">
            <img src="../public/img/zoo.jpg" alt="zoo">
            <div class="carousel-caption">
                <h3>Zootopia</h3>
                <p>In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work
                    together to uncover a conspiracy.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <div class="backforwardSwitch">
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container topMovies">
    <div class="row">
        <p id="topMovies-header">WHAT'S HOT</p>
        <div class="col-lg-3 boxHits" style="padding-left:0px;">
            <img src="../public/img/squad.jpg" class="img-thumbnail" alt="suicidesquad" width="290" height="200" id="1" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits">
            <img src="../public/img/sausage.jpg" class="img-thumbnail" alt="sausageparty" width="290" height="200" id="2" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits">
            <img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="290" height="200" id="3" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits" style="padding-right:0px;">
            <img src="../public/img/sully.jpg" class="img-thumbnail" alt="sully" width="290" height="200" id="4" onclick="openBooking(this.id)">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo.</p>
            <hr/>
            <p class="subheading">We are expanding!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo.</p>
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

<script>
	
	function priceValidator(quantityInput) 
	{
		if (quantityInput.value == "") 
		{
			quantityInput.value = 0;
		} 
		else
		{
			quantityInput.value = parseInt(quantityInput.value);
		}
	}
	
	function calculatePrice() 
	{
		var ticketTable = document.getElementById("bookingTable");
		var quantity = document.getElementsByClassName("numOfTickets");
	
		ticketTable.rows[1].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[0].value * 8).toFixed(2);		//Child
		ticketTable.rows[2].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[1].value * 14).toFixed(2);	//Adult
		ticketTable.rows[3].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[2].value * 12).toFixed(2);	//Senior
		ticketTable.rows[4].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[3].value * 10).toFixed(2);	//Concession

		calculateTotalPrice();		
	} 
	
	function calculateTotalPrice() 
	{
		var ticketTable = document.getElementById("bookingTable");
		var totalPrice = parseFloat(0.0);

		for (var i = 1; i <= 4; i++) 
		{
			totalPrice += parseFloat(ticketTable.rows[i].cells[2].getElementsByClassName("subtotalPrice")[0].innerText);
		}
    
		document.getElementById("totalPrice").innerHTML = "$" + totalPrice.toFixed(2);
	}

	function openBooking(id)
	{

		if(id == 1)
		{
			$("#namePlaceholder").html("Suicide Squad");
			$("#movieName").val("Suicide Squad");
		}
		else if(id == 2)
		{
			$("#namePlaceholder").html("Sausage Party");
			$("#movieName").val("Sausage Party");
		}
		else if(id == 3)
		{
			$("#namePlaceholder").html("X-MEN Apocalypse");
			$("#movieName").val("X-MEN Apocalypse");
		}
		else
		{
			$("#namePlaceholder").html("Sully");	
			$("#movieName").val("Sully");	
		}
		
		$('#tilesModal').modal('show');
	}
	
	function resetFields()
	{
		var x = document.getElementsByClassName("resetMe");
    		
		for(var i = 0; i < x.length; i++)
		{
			x[i].value = "0";
			x[i].innerHTML= "0.00";
		}
	}
	
	$(document).ready(function()
    {
		/*("#submitForm").click(function(){
			$("#ticketform").submit(function(){
				alert("Submitted");
			});
		});*/
		
		
		$("#submitForm").click(function(){
			$('#ticketform').submit();
		});
        
    });
	
</script>

</body>

</html>