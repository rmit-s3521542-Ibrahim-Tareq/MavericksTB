@extends('components.global')

@section('content')
<div class="container movieTabs">
    <ul class="nav nav-pills">
        <li class="nowshowingTab"><a href="#showing"><h1>Now Showing</h1></a></li>
        <li class="comingsoonTab"><a href="#soon"><h1>Coming Soon</h1></a>
        </li>
    </ul>
    <hr/>
    <div class="tab-content clearfix">
        <div class="tab-pane nowshowingTab">
            @if(count($movies) < 1)
            <p style="text-align:center;">There are no movies to display.</p>
            @else
                @foreach ($movies as $m)
                <div class="col-lg-3 boxHits">
                    <img src="{{url('/')}}/img/{{$m['poster_url']}}" class="img-thumbnail" alt="sully" width="290" height="200" />
                </div>
                @endforeach
            @endif
        </div>
        <div class="tab-pane comingsoonTab">

        </div>
    </div>
</div>
@endsection

@section('additionalCss')
<style>
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
        console.log('in');
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
    });

    $(window).on("hashchange", function() {
        checkHash();
    });
</script>
@endsection