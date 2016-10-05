@extends('components.global')

@section('additionalCss')
    <style>

        .ticketEdit
        {
            margin-top: -20px;
        }

    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-top:50px;background-color:rgba(211, 211, 211, 0.15);color:black;">
            <p class="text-center" style="font-size:3em; color:#c5c5c5;">
                Edit booking info
            </p>
            <div class="text-center" style="font-size:1.2em; margin-bottom:20px; color:#c5c5c5;">
            {!! Form::model($ticket, ['method' => 'PATCH','route' => ['cart.update', $ticket['id']]]) !!}
                <span> TicketID: {{ $ticket['id'] }}  </span><br/>
                <span> Name: {{ $ticket['name'] }}  </span><br/>
                <span> Location: {{ $ticket['location'] }}  </span><br/>
                <span> Time: {{ $ticket['time'] }}  </span><br/>
                <div style="margin-top:50px;">
                    <input type="hidden" name="ticketID" value="{{ $ticket['id'] }}">
                    @if ($ticket['child'] > 0)
                        <p class="ticketEdit"> Child: <input type="number" name="childticket" min="1" max="10" value="{{ $ticket['child'] }}"> </p><br/>
                    @endif
                    @if ($ticket['adult'] > 0)
                        <p class="ticketEdit"> Adult: <input type="number" name="adulticket" min="1" max="10" value="{{ $ticket['adult'] }}"> </p><br/>
                    @endif
                    @if ($ticket['senior'] > 0)
                        <p class="ticketEdit"> Senior: <input type="number" name="seniorticket" min="1" max="10" value="{{ $ticket['senior'] }}"> </p><br/>
                    @endif
                    @if ($ticket['concession'] > 0)
                        <p class="ticketEdit"> Concession: <input type="number" name="concessionticket" min="1" max="10" value="{{ $ticket['concession'] }}"> </p>
                    @endif
                </div>
            </div>
            <button class="center-block btn btn-primary btn-md" style="margin-bottom:30px;" type="submit">Update</button>
            {!! Form::close() !!}
            <button class="btn btn-danger btn-md" style="margin-bottom:20px;margin-left:620px; margin-top:-105px;" type="button"><a style="text-decoration: none; color:white;" href="{{ url('cart') }}">Cancel</a></button>
        </div>
    </div>
</div>
@endsection
