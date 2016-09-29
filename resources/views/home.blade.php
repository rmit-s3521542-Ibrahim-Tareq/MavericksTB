@extends('components.global')

@section('content')
<div class="container carousel-placeholder"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <h1 class="title"></h1>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        @for($j = 0; $j < count($hot); $j++)
        <li data-target="#myCarousel" data-slide-to="{{$j}}" class="{{$j==0 ? 'active' : ''}}"></li>
        @endfor
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($hot as $k=>$h)
        <div class="item {{ $i++ == 0 ? 'active' : '' }}" style="background-image:url({{ url('/') }}/img/large-banners/{{$movies[$k]['carousel_url']}});">
            <img src="{{ url('/') }}/img/large-banners/{{$movies[$k]['carousel_url']}}" alt="{{$movies[$k]['movie_name']}}">
            <div class="carousel-caption">
                <h3>{{$movies[$k]['movie_name']}}</h3>
                <p>{{$movies[$k]['short_desc']}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <div class="backforwardSwitch">
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container topMovies">
    <div class="row">
        <p id="topMovies-header">WHAT'S HOT</p>
        <div class="col-lg-3 boxHits" style="padding-left:0px;">
            <img src="../public/img/squad.jpg" class="img-thumbnail" alt="suicidesquad" width="290" height="200" id="1" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits">
            <img src="../public/img/sausage.jpg" class="img-thumbnail" alt="sausageparty" width="290" height="200" id="2" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits">
            <img src="../public/img/xmen.jpg" class="img-thumbnail" alt="xmen" width="290" height="200" id="3" onclick="openBooking(this.id)">
        </div>
        <div class="col-lg-3 boxHits" style="padding-right:0px;">
            <img src="../public/img/sully.jpg" class="img-thumbnail" alt="sully" width="290" height="200" id="4" onclick="openBooking(this.id)">
        </div>
    </div>
</div>

<div class="container newsBox">
    <div class="row">
        <div class="col-lg-5 newsBox-left">
            <p>Don't be late,</p>
            <p>Book your ticket now!</p>
            <a href="#" class="ticket"><i class="book"></i>BOOK TICKET</a>
        </div>
        <div class="col-lg-7 newsBox-right">
            <p id="newBoxRight-header">NEWS</p>
            <p class="subheading">Get discount upto <strong>10%</strong> if you are a member!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo.</p>
            <hr/>
            <p class="subheading">We are expanding!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo.</p>
        </div>
    </div>
</div>
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
    function openBooking(id)
    {
        if(id == 1)
        {
            $("#namePlaceholder").html("Suicide Squad");
            $("#movieName").val("Suicide Squad");
        }
        else if(id == 2)
        {
            $("#namePlaceholder").html("Sausage Party");
            $("#movieName").val("Sausage Party");
        }
        else if(id == 3)
        {
            $("#namePlaceholder").html("X-MEN Apocalypse");
            $("#movieName").val("X-MEN Apocalypse");
        }
        else
        {
            $("#namePlaceholder").html("Sully");
            $("#movieName").val("Sully");
        }
        $('#tilesModal').modal('show');
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
    $(document).ready(function()
    {
        /*("#submitForm").click(function(){
         $("#ticketform").submit(function(){
         alert("Submitted");
         });
         });*/
        $("#submitForm").click(function(){
            $('#ticketform').submit();
        });
    });
</script>
@endsection