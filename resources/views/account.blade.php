@extends('components.global')

@section('content')
<div class="container">
    <h1 class="page-title">Hello <b>{{ \App\Models\User::find(Auth::id())->name }}</b></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Wishlist</h3></div>
                    <div class="row" style="padding:30px; ">
                        @if(count($wishlist) < 1)
                        <div class="col-md-12">
                            <p>You have no items on your wishlist.</p>
                        </div>
                        @else
                        @foreach($wishlist as $cur)
                        <div class="col-md-2 boxHits">
                            <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" style="width:180px; height:230px;" />
                            {!! Form::open(['method' => 'DELETE','route' => ['account.destroy', $cur['wish_id']],'style'=>'display:block;width:100%;height:100%;']) !!}
                            {!! Form::submit('Delete', ['class' => 'close-wish btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </div>
                        @endforeach
                        @endif
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 bookingHead">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>My Bookings</h3></div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false" style="padding-top:10px;">
                    @if(count($bookingArray) < 1)
                    <p style="padding:30px;">You have no current bookings.</p>
                    @else
                    @foreach($bookingArray as $booking)
                    <div class="panel panel-default" style="text-align: left">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">

                                        <div class="row">
                                                    <div class="col-md-12">Booking ID: {{$booking['booking_id']}}</div>
                                        </div>

                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{$i++}}" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <table class="table table-striped tablecs">
                                @foreach($booking['movie_details'] as $var =>$movie)

                                        <tr>
                                            <td>
                                            <div class="row">
                                                <div class="col-md-4">Movie: {{$movie['movie']['movie_name']}}</div>
                                                <div class="col-md-4">Location: {{$movie['location']['cinema_name']}}</div>
                                                <div class="col-md-4">Session-Time: {{$movie['session']['session_time']}}</div>
                                            </div>

                                    <div>Child: {{$movie['ticket']['childticket']}}</div>
                                    <div>Adult: {{$movie['ticket']['adulticket']}}</div>
                                    <div>Senior: {{$movie['ticket']['seniorticket']}}</div>
                                    <div>Concession: {{$movie['ticket']['concessionticket']}}</div></td></tr>

                                @endforeach
                                </table>



                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additionalCss')
<style>
    .bookingHead {
        text-align: left;
    }

    .tablecs tr:nth-child(odd){
        background-color: rgb(88, 57, 57) !important;

    }
    .checkout{
        text-align: center;
    }

    .close-wish {
        position: absolute;
        top: -30px;
        right: 10px;
        color: white;
    }
</style>
@endsection