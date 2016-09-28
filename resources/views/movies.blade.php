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
                    <li class="pull-right closeOverlay" onclick="resetFields()"><a class="glyphicon glyphicon-remove"></a></li>
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
                            {!! Form::open(array('action' => 'CartController@store','method'=>'POST', 'id' => 'ticketForm')) !!}
                            <div class="modal-body">
                                <input type="hidden" name="moviename" id="movieName"/>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="row cinemaSession" style="margin-top:20px;">
                                    <div class="col-lg-6">
                                        <p>Cinema location: </p>
                                        <select class="form-control input-sm" name="location" id="mLocation"></select>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>Session Time: </p>
                                        <select class="form-control input-sm" name="time" id="mTime"></select>
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
                                            <td><input type="number" value="0" name="childticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Adult</td>
                                            <td><input type="number" value="0" name="adulticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Seniors</td>
                                            <td><input type="number" value="0" name="seniorticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td>Concession</td>
                                            <td><input type="number" value="0" name="concessionticket" min="0" max="10" class="numOfTickets resetMe" onchange="priceValidator(this);calculatePrice()" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"></td>
                                            <td>$<span class="subtotalPrice resetMe">0.00</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-right" style="font-size:2em;padding-top:10px;padding-right:50px;margin-bottom:-10px;">Grand Total: <span id="totalPrice" class="resetMe">$0.00</span></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="submitForm" class="btn btn-default">Add to cart</button>
                            </div>
                            {!! Form::close() !!}
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
    function priceValidator(quantityInput)
    {
        if (quantityInput.value == "")
        {
            quantityInput.value = 0;
        }
        else
        {
            quantityInput.value = parseInt(quantityInput.value);
        }
    }
    function calculatePrice()
    {
        var ticketTable = document.getElementById("bookingTable");
        var quantity = document.getElementsByClassName("numOfTickets");
        ticketTable.rows[1].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[0].value * 8).toFixed(2);		//Child
        ticketTable.rows[2].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[1].value * 14).toFixed(2);	//Adult
        ticketTable.rows[3].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[2].value * 12).toFixed(2);	//Senior
        ticketTable.rows[4].cells[2].getElementsByClassName("subtotalPrice")[0].innerText = (quantity[3].value * 10).toFixed(2);	//Concession
        calculateTotalPrice();
    }
    function calculateTotalPrice()
    {
        var ticketTable = document.getElementById("bookingTable");
        var totalPrice = parseFloat(0.0);
        for (var i = 1; i <= 4; i++)
        {
            totalPrice += parseFloat(ticketTable.rows[i].cells[2].getElementsByClassName("subtotalPrice")[0].innerText);
        }
        document.getElementById("totalPrice").innerHTML = "$" + totalPrice.toFixed(2);
    }
    function resetFields()
    {
        var x = document.getElementsByClassName("resetMe");
        for(var i = 0; i < x.length; i++)
        {
            x[i].value = "0";
            x[i].innerHTML= "0.00";
        }
    }


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
        var sessions = [];

        var selectedCinema = -1;
        var selectedTime = -1;
        var selectedMovie = "";

        $("#mLocation").on("change", function() {
            selectedCinema = this.value;
            selectedTime = -1;

            $("#mTime").html('<option selected disabled>You must first select a cinema</option>');
            for(var e in sessions) {
                if(sessions[e]['cinema_id'] == cinemas[selectedCinema]['id'] && sessions[e]['movie_id'] == selectedMovie) {
                    $("#mTime").append('<option value="'+e+'">'+sessions[e]['session_time']+'</option>');
                }
            }
        });
        $("#mTime").on("change", function() {
            selectedTime = this.value;
        });

        checkHash();

        $("#movieOverlay.overlay .closeOverlay").on("click", function() {
            $("#movieOverlay").removeClass("show");
            selectedMovie = "";

            $("#mLocation").val(-1);
            $("#mTime").html('<option selected disabled>You must first select a cinema</option>');

        });

        function createClicker(toAppend, data, soon) {
            var soon = soon || false;
            toAppend.on("click", function() {
                selectedMovie = data['id'];
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
                $('#movieOverlay.overlay #movieName').val(data['movie_name']);
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
                sessions = data[3];

                $("#mLocation").html('<option value="-1" selected disabled>Select a cinema</option>');
                for(var e in cinemas) {
                    $("#mLocation").append('<option value="'+e+'">'+cinemas[e]['cinema_name']+'</option>');
                }

                $("#mTime").html('<option selected disabled>You must first select a cinema</option>');

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

        $("#submitForm").click(function(){
            $('#ticketForm').submit();
        });
    });

    $(window).on("hashchange", function() {
        checkHash();
    });
</script>
@endsection