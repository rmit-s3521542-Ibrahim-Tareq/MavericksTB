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
            {!! Form::model($appender['session'], ['method' => 'PATCH','route' => ['cart.update', $appender['session']['id']]]) !!}
                <span> Name: {{ $appender['movie']['movie_name'] }}  </span><br/>
                <span> Location: {{ $appender['cinema']['cinema_name'] . ' : ' . $appender['cinema']['location'] }}  </span><br/>
                <span> Time: {{ $appender['time']['session_time'] }}  </span><br/>
                <div style="margin-top:50px;">
                    <input type="hidden" name="ticketID" value="{{ $appender['session']['id'] }}">
                        <p class="ticketEdit"> Child: <input type="number" name="childticket" min="0" max="10" value="{{ $appender['session']['child'] }}"> </p><br/>
                        <p class="ticketEdit"> Adult: <input type="number" name="adulticket" min="0" max="10" value="{{ $appender['session']['adult'] }}"> </p><br/>
                        <p class="ticketEdit"> Senior: <input type="number" name="seniorticket" min="0" max="10" value="{{ $appender['session']['senior'] }}"> </p><br/>
                        <p class="ticketEdit"> Concession: <input type="number" name="concessionticket" min="0" max="10" value="{{ $appender['session']['concession'] }}"> </p>
                </div>
            </div>
            <button class="center-block btn btn-primary btn-md" style="margin-bottom:30px;" type="submit">Update</button>
            {!! Form::close() !!}
            <button class="btn btn-danger btn-md" style="margin-bottom:20px;margin-left:620px; margin-top:-105px;" type="button"><a style="text-decoration: none; color:white;" href="{{ url('cart') }}">Cancel</a></button>
        </div>
    </div>
</div>
@endsection
