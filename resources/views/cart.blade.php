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
		<div class="text-center alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	@if ($message = Session::get('successDel'))
		<div id="message" class="text-center alert alert-danger">
			<p>{{ $message }}</p>
		</div>
	@endif

	<div class="container">
		<div class="row cart">
			<div class="col-lg-6 cartItems">
				<p id="cartHeading">Shopping Bag</p>
				<div style="padding-bottom:20px;">
					<div class="ticketContainer">
						@if(Session::has('tickets'))
							@if(count($appendArr) < 1)
							<p>There are no items in your cart.</p>
							@endif

							@foreach($appendArr as $ticket)
								<div class="ticketBlocks" style="padding-bottom:20px;">
									<img src="../public/img/ticket.png" width="170" style="float:left;margin-top:-10px;margin-left:-30px;">
									<span> Movie name: {{ $ticket['movie']['movie_name'] }} </span><br />
									<span> Location: {{ $ticket['cinema']['cinema_name'] . ' : ' . $ticket['cinema']['location'] }} </span><br />
									<span> Session Time: {{ $ticket['time']['session_time'] }} </span><br />
									@if ($ticket['session']['child'] > 0)
										<span> Child: {{ $ticket['session']['child'] }} </span><br/>
									@endif
									@if ($ticket['session']['adult'] > 0)
										<span> Adult: {{ $ticket['session']['adult'] }} </span><br/>
									@endif
									@if ($ticket['session']['senior'] > 0)
										<span> Senior: {{ $ticket['session']['senior'] }} </span><br/>
									@endif
									@if ($ticket['session']['concession'] > 0)
										<span> Concession: {{ $ticket['session']['concession'] }} </span>
									@endif

									<div style="margin-top:10px;">
										{!! Form::open(['method' => 'DELETE','route' => ['cart.destroy', $ticket['session']['id']],'style'=>'display:inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}
										<a class="btn btn-primary" href="{{ route('cart.edit',$ticket['session']['id']) }}">Edit</a>
									</div>
								</div>
							@endforeach
						@endif
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
				@if ($grandTotal > 0)
					<button type="submit" class="col-lg-12 btn btn-default btn-md checkoutButton">PROCEED TO CHECKOUT</button>
				@else
					<button type="submit" class="col-lg-12 btn btn-default btn-md checkoutButton" disabled>PROCEED TO CHECKOUT</button>
				@endif
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection

@section('additionalJs')
	<script>
		$("#message").delay(3000).fadeOut();
	</script>
@endsection
