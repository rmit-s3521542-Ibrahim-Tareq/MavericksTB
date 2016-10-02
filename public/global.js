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

var movies = {};
var moviesSoon = {};
var cinemas = [];
var sessions = [];

var selectedCinema = -1;
var selectedTime = -1;
var selectedMovie = "";

function createClicker(data, soon) {
    var soon = soon || false;
    selectedMovie = data['id'];
    if(!soon) {
        $('.mComingSoon').hide();
        $('.mShowing').show();
    }
    else {
        $('.mComingSoon').show();
        $('.mShowing').hide();
    }

    $('#movieOverlay.overlay .imgOverlay').css('background-image', 'url(img/'+data['poster_url']+')');
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
}

$(document).ready(function() {
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

    $("#movieOverlay.overlay .closeOverlay").on("click", function() {
        $("#movieOverlay").removeClass("show");
        selectedMovie = "";

        $("#mLocation").val(-1);
        $("#mTime").html('<option selected disabled>You must first select a cinema</option>');
        $("#mAddWishlist").slideDown(250);
    });

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "movies",
        data: { },
        success: function(data) {
            movies = {};
            moviesSoon = {};
            cinemas = data[2];
            sessions = data[3];

            $("#mLocation").html('<option value="-1" selected disabled>Select a cinema</option>');
            for(var e in cinemas) {
                $("#mLocation").append('<option value="'+e+'">'+cinemas[e]['cinema_name']+'</option>');
            }

            $("#mTime").html('<option selected disabled>You must first select a cinema</option>');

            for(var e in data[0]) {
                movies[" " + data[0][e]['id'] + " "] = data[0][e];
            }

            for(var e in data[1]) {
                moviesSoon[" " + data[1][e]['id'] + " "] = data[1][e];
            }
        }
    });

    $("#mAddWishlist").on("click", function() {
        $.ajax({
            method: "POST",
            dataType: "JSON",
            url: "wishlist",
            data: { id: selectedMovie },
            success: function(data){
                if(data == "error") {
                    alert('An error occurred. Please try again!');
                }
                else {
                    alert('Movie added to your wishlist!');
                    $("#mAddWishlist").slideUp(250);
                }
            }
        });
    });

    $("#submitForm").click(function(){
        $('#ticketForm').submit();
    });
});