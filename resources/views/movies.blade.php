@extends('components.global')

@section('content')
<div class="container movieTabs">
    <ul class="nav nav-pills">
        <li class="nowshowingTab"><a href="#showing"><h1>Now Showing</h1></a></li>
        <li class="comingsoonTab"><a href="#soon"><h1>Coming Soon</h1></a></li>
    </ul>
    <hr/>
    <div class="tab-content clearfix">
        <div class="tab-pane nowshowingTab">
            <p style="text-align:center;" class="notif notifOne">There are no movies to display.</p>
        </div>
        <div class="tab-pane comingsoonTab">
            <p style="text-align:center;" class="notif notifTwo">There are no movies to display.</p>
        </div>
    </div>
</div>

<div class="overlay" id="movieOverlay">
    <div class="imgOverlay"></div>
        <div class="box">
            <h1 id="mMovieName"></h1>
            <div class="content">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
                    <li role="presentation"><a href="#book" aria-controls="book" role="tab" data-toggle="tab">Book Tickets</a></li>
                    <li class="pull-right closeOverlay"><a class="glyphicon glyphicon-remove"></a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="details">
                        <div class="row">
                            <div class="col-md-8">
                                <p id="mSypnosis"></p>
                                <hr/>
                                <iframe style="width:100%; height:400px;" target="_parent" frameborder="0" id="mYoutube"></iframe>
                            </div>
                            <div class="col-md-4">
                                <p><b>Film Runtime: </b><span id="mRuntime"></span> minutes</p>
                                <p><b>Release Date: </b><span id="mReleaseDate"></span></p>
                                <p><b>Genre: </b><span id="mGenre"></span></p>
                                <p><b>Actors: </b><span id="mActors"></span></p>
                                <p><b>IMDB Rating: </b><span id="mIMDBRating"></span>/10</p>
                                <p><span id="mRating"></span></p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="book">
                        <div class="mComingSoon">
                            <h3>This movie has not been released yet.</h3>
                            <a class="btn btn-info">Add to wish list</a>
                        </div>
                        <div class="mShowing">
                            <form role="form" id="ticketform" action="{!! url('/cart') !!}" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="movieName" id="movieName">
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('additionalCss')
<style>
    .mComingSoon, .mShowing {
        display:none;
    }

    .movieTabs {
        padding-top:50px;
    }

    .movieTabs .nav-pills li {
        margin-right:20px;
    }

    .movieTabs .nav-pills li h1 {
        margin:0;
        padding:10px 0px;
    }

    .movieTabs .nav-pills li.active h1 {
        font-weight:400;
    }
</style>
@endsection


@section('additionalJs')
<script>
    function checkHash() {
        var hash = window.location.hash.substr(1);
        if (hash.length > 0) {
            if (hash == "soon") {
                $('.comingsoonTab').addClass('active');
                $('.nowshowingTab').removeClass('active');
            }
            else {
                $('.nowshowingTab').addClass('active');
                $('.comingsoonTab').removeClass('active');
            }
        }
        else {
            $('.nowshowingTab').addClass('active');
            $('.comingsoonTab').removeClass('active');
        }
    }

    $(document).ready(function() {
        var movies = [];
        var cinemas = [];

        checkHash();

        $("#movieOverlay.overlay .closeOverlay").on("click", function() {
            $("#movieOverlay").removeClass("show");
        });

        function createClicker(toAppend, data, soon) {
            var soon = soon || false;
            toAppend.on("click", function() {
                if(!soon) {
                    $('.mComingSoon').hide();
                    $('.mShowing').show();
                }
                else {
                    $('.mComingSoon').show();
                    $('.mShowing').hide();
                }

                $('#movieOverlay.overlay .imgOverlay').css('background-image', 'url({{url('/')}}/img/'+data['poster_url']+')');
                $('#movieOverlay.overlay h1#mMovieName').text(data['movie_name']);
                $('#movieOverlay.overlay #movieName').text(data['movie_name']);
                $("#movieOverlay.overlay p#mSypnosis").text(data['sypnosis']);
                $("#movieOverlay.overlay span#mRuntime").text(data['runtime']);
                $("#movieOverlay.overlay span#mGenre").text(data['genre']);
                $("#movieOverlay.overlay span#mReleaseDate").text(formatTimestamp(data['release_date']*1));
                $("#movieOverlay.overlay #mYoutube").attr('src', data['youtube_url']);
                $("#movieOverlay.overlay span#mIMDBRating").text(data['imdb_rating']);
                $("#movieOverlay.overlay span#mActors").text(data['actors']);

                var className = "";
                switch(data['rating']) {
                    case "G": className="ratingG"; break;
                    case "PG": className="ratingPG"; break;
                    case "M": className="ratingM"; break;
                    case "MA": className="ratingMA"; break;
                    case "R": className="ratingR"; break;
                    default:
                    case "Unrated": className="ratingUnrated"; break;
                }
                $("#movieOverlay.overlay span#mRating").text(data['rating']);
                $("#movieOverlay.overlay span#mRating").attr('class', className);

                $("#movieOverlay").addClass("show");
            });
        }

        $.ajax({
            method: "POST",
            dataType: "JSON",
            url: "{{url('/movies')}}",
            data: { },
            success: function(data) {
                movies = [];
                cinemas = data[2];

                if(data[0].length < 1) {
                    $(".notifOne").show().text("There are no movies to display.");
                }
                else {
                    $(".notifOne").hide();
                    for(var e in data[0]) {
                        var toAppend = $('<div class="col-lg-3 boxHits"><img src="{{url('/')}}/img/'+data[0][e]['poster_url']+'" class="img-thumbnail" alt="'+data[0][e]['movie_name']+'" width="290" height="200" /></div>');
                        toAppend.appendTo($('.nowshowingTab.tab-pane'));
                        movies.push(data[0][e]);
                        createClicker(toAppend, data[0][e]);
                    }
                }


                if(data[1].length < 1) {
                    $(".notifTwo").show().text("There are no movies to display.");
                }
                else {
                    $(".notifTwo").hide();
                    for(var e in data[1]) {
                        var toAppend = $('<div class="col-lg-3 boxHits"><img src="{{url('/')}}/img/'+data[1][e]['poster_url']+'" class="img-thumbnail" alt="'+data[1][e]['movie_name']+'" width="290" height="200" /></div>');
                        toAppend.appendTo($('.comingsoonTab.tab-pane'));
                        movies.push(data[1][e]);
                        createClicker(toAppend, data[1][e], true);
                    }
                }
            },
            error: function() {
                $(".notif").show().text("An error occurred. Please try again.");
            }
        });
    });

    $(window).on("hashchange", function() {
        checkHash();
    });
</script>
@endsection