@extends('components.global')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="border-bottom: 1px solid #484747;">
                    <h3><b>Hello {{ \App\Models\User::find(Auth::id())->name }}</b></h3>
                </div>


                    <div class="row" style="padding:30px; ">
                        <h3><b>WISH-LIST</b></h3>
                        @foreach($wishlist as $cur)
                        <div class="col-md-2 boxHits">
                            <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="180" />
                            <button type="button" class="close" aria-label="Close" style="position: absolute; top: 5px; right: 10px; color: white; opacity: 1"><span>&times;</span></button>
                        </div>
                            @endforeach
                    </div>



                <div class="row">
                    <div class="col-md-6 bookingHead"><h4><b>Bookings</b></h4><hr>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($bookingArray as $booking)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                                <div class="row">
                                                            <div class="col-md-4">{{$booking['movie_details']['movie_name']}}</div>
                                                            <div class="col-md-4">{{$booking['created_at']}}</div>
                                                            <div class="col-md-4">{{$booking['session_time']}}</div>
                                                </div>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        {{$booking['movie_details']['short_desc']}}
                                    </div>
                                    <button type="button" class="btn btn-info">Movie Details</button>

                                    <!-- Indicates a successful or positive action -->
                                    <button type="button" class="btn btn-success">Edit Booking</button>

                                    <!-- Contextual button for informational alert messages -->
                                    <button type="button" class="btn btn-danger">Cancel Booking</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6 checkout"><h4><b>Change Password</b></h4><hr>


                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="newInputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-md-6">
                                    <button type="submit" class="btn btn-default col-md-6">Submit</button>
                                </div>
                            </div>
                        </form>
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
        border-right: 1px solid #484747;
        padding-left: 30px;
        text-align: center;
    }

    .checkout{
        text-align: center;
    }
</style>
@endsection