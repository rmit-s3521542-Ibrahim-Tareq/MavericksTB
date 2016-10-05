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
        checkHash();

        function click(toAppend, data, soon) {
            var soon = soon || false;
            toAppend.on("click", function() {
                createClicker(data, soon);
            });
        }

        setTimeout(function() {
            if (Object.keys(movies).length < 1) {
                $(".notifOne").show().text("There are no movies to display.");
            }
            else {
                $(".notifOne").hide();
                for (var e in movies) {
                    if(movies.hasOwnProperty(e)) {
                        var toAppend = $('<div class="col-lg-3 boxHits"><img src="{{url('/')}}/img/' + movies[e]['poster_url'] + '" class="img-thumbnail" alt="' + movies[e]['movie_name'] + '" width="290" height="200" /></div>');
                        toAppend.appendTo($('.nowshowingTab.tab-pane'));
                        click(toAppend, movies[e]);
                    }
                }
            }

            if (Object.keys(moviesSoon).length < 1) {
                $(".notifTwo").show().text("There are no movies to display.");
            }
            else {
                $(".notifTwo").hide();
                for (var e in moviesSoon) {
                    if(moviesSoon.hasOwnProperty(e)) {
                        var toAppend = $('<div class="col-lg-3 boxHits"><img src="{{url('/')}}/img/' + moviesSoon[e]['poster_url'] + '" class="img-thumbnail" alt="' + moviesSoon[e]['movie_name'] + '" width="290" height="200" /></div>');
                        toAppend.appendTo($('.comingsoonTab.tab-pane'));
                        click(toAppend, moviesSoon[e], true);
                    }
                }
            }
        }, 1000);
    });

    $(window).on("hashchange", function() {
        checkHash();
    });
</script>
@endsection