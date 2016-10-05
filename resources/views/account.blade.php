@extends('components.global')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b>Dashboard</b></h3></div>

                <div class="panel-body" style="border-bottom: 1px solid #484747;">
                    <h3>Hello {{ \App\Models\User::find(Auth::id())->name }}</h3>
                </div>


                    <div class="row" style="padding:30px; ">
                        <h3>WISH-LIST</h3>
                        @foreach($wishlist as $cur)
                        <div class="col-md-2 boxHits">
                            <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="180" />
                            {!! Form::open(['method' => 'DELETE','route' => ['account.destroy', $cur['wish_id']],'style'=>'display:inline']) !!}
                            {!! Form::submit('', ['class' => 'glyphicon glyphicon-remove close-wish']) !!}
                            {!! Form::close() !!}
                        </div>
                        @endforeach
                    </div>



                <div class="row">
                    <div class="col-md-12 bookingHead"><h3><b>Bookings</b></h3><hr>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($bookingArray as $booking)
                            <div class="panel panel-default" style="text-align: left">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">

                                                <div class="row">
                                                            <div class="col-md-6">Booking Number: {{$booking['booking_id']}}</div>
                                                            <div class="col-md-6">{{$booking['created_at']}}</div>
                                                </div>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$i++}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <table class="table table-striped tablecs">
                                        @foreach($booking['movie_details'] as $var =>$movie)

                                                <tr>
                                                    <td>
                                                    <div class="row">
                                                        <div class="col-md-6">Movie: {{$movie['moviename']}}</div>
                                                        <div class="col-md-6">Location: {{$movie['location']}}</div>
                                                    </div>

                                            <div>Child: {{$movie['childticket']}}</div>
                                            <div>Adult: {{$movie['adulticket']}}</div>
                                            <div>Senior: {{$movie['seniorticket']}}</div>
                                            <div>Concession: {{$movie['concessionticket']}}</div></td></tr>

                                        @endforeach
                                        </table>



                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additionalCss')
<style>
    .bookingHead {
        padding: 30px;
        text-align: left;
    }

    .tablecs tr:nth-child(odd){
        background-color: rgb(88, 57, 57) !important;

    }
    .checkout{
        text-align: center;
    }

    .close-wish {
        position: absolute; top: 5px; right: 10px; color: white; opacity: 1;
        margin:0;
        background-color:transparent;
    }
</style>
@endsection