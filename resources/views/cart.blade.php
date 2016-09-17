@extends('components.global')

@section('additionalCss')
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
@endsection

@section('content')
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
@endsection