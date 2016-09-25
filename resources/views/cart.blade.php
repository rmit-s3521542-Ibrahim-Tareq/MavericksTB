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

	.ticketContainer{
		margin-right:150px;
	}

	.ticketBlocks{
		margin-bottom: 20px;
	}


</style>
@endsection

@section('content')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif




<div class="container">
	<div class="row cart">
		<div class="col-lg-6 cartItems">
			<p id="cartHeading">Shopping Bag</p>
			<div style="padding-bottom:20px;">
				<div class="ticketContainer">
					@foreach ($tickets as $ticket)
						<div class="ticketBlocks">
							<span>Movie name: {{ $ticket->moviename}}</span></br>
							<span>Location: {{ $ticket->location}}</span></br>
							<span>Session Time: {{ $ticket->time }}</span></br>
							@if($ticket->childticket > 0)
								<span>Child Ticket(s): {{ $ticket->childticket }}</span></br>
							@endif
							@if($ticket->adulticket > 0)
								<span>Adult Ticket(s): {{ $ticket->adulticket }}</span></br>
							@endif
							@if($ticket->seniorticket > 0)
								<span>Senior Ticket(s): {{ $ticket->seniorticket }}</span></br>
							@endif
							@if($ticket->concessionticket > 0)
								<span>Concession Ticket(s): {{ $ticket->concessionticket }}</span>
							@endif
							<button type="button" id="{{ $ticket->id }}" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit</button>

							{!! Form::open(['method' => 'DELETE','route' => ['cart.destroy', $ticket->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-lg-offset-1 cartSummary">
			<p id="summaryHeading">Order Summary</p>
			@if ($numOfChildTix > 0)
				<p class="ticketSummary">Child Ticket(s): <span id="child">{{ $numOfChildTix }} x $8</span></p>
			@endif
			@if ($numOfAdultTix > 0)
				<p class="ticketSummary">Adult Ticket(s): <span id="adult">{{ $numOfAdultTix }} x $14</span></p>
			@endif
			@if ($numOfSeniorTix > 0)
				<p class="ticketSummary">Senior Ticket(s): <span id="senior">{{ $numOfSeniorTix }} x $12</span></p>
			@endif
			@if ($numOfConcessionTix > 0)
				<p class="ticketSummary">Concession Ticket(s): <span id="concession">{{ $numOfConcessionTix }} x $10</span></p>
			@endif
			{!! Form::open(['url' => 'payment']) !!}
			<p class="totalPrice">Total: $<span>{{ $grandTotal }}</span> AUD</p>
			<input type="hidden" name="total" value="{{ $grandTotal }}">
			<button type="submit" class="col-lg-12 btn btn-default btn-md checkoutButton">PROCEED TO CHECKOUT</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection