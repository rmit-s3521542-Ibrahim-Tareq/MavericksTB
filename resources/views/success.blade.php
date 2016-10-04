@extends('components.global')

@section('additionalCss')
    <style>
        .bookingDetails
        {
            padding: 30px;
            background-color: rgba(211, 211, 211, 0.15);
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 bookingDetails" style="margin-top:50px;">
                <div class="text-center" style="font-size:1.2em;">
                    <span style="font-size:1.7em;">Your booking details: </span><br/>
                    <span> Booking ID: {{ $request->booking_id }}  </span><br/>
                    <span> Name: {{ $request->name }}  </span><br/>
                    <span> Address: {{ $request->address }}  </span><br/>
                    <span> Post Code: {{ $request->postcode }}  </span><br/>
                    <span> Mobile: {{ $request->mobilenum }}  </span><br/>
                    <span> City: {{ $request->city }}  </span>
                </div>
            </div>
            <div class="text-center">
                <p> You will be redirected to the <a href="{{ url('/') }}"> homepage </a> in <span id="countdown"></span> seconds </p>
            </div>
        </div>
    </div>
@endsection

@section('additionalJs')
    <script>
        window.onload = countdown(10);

        var myVar;
        function countdown(val)
        {
            var counter=val;

            myVar= setInterval(function()
            {
                if(counter>=0)
                {
                    document.getElementById("countdown").innerHTML=counter;
                }
                if(counter<0)
                {
                    window.location.href = '{{ url('/') }}';
                }

                counter--;
            }, 1000)
        }

    </script>
@endsection
