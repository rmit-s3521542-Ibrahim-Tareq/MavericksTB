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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi explicabo placeat rerum sint ut! Accusantium aliquid amet consequatur dignissimos, distinctio eveniet ipsa laudantium molestiae placeat possimus, quae quod ullam voluptates?
        </div>
        <div class="tab-pane comingsoonTab">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque doloribus enim facere
                laborum mollitia placeat repudiandae rerum sunt voluptas? Ad commodi, debitis enim exercitationem fugiat
                natus recusandae rerum vel.
            </div>
            <div>A accusantium animi asperiores aut autem eius, enim esse laborum nesciunt nobis non obcaecati
                perspiciatis praesentium quas quos repellat sint velit veniam vitae voluptatibus. Beatae debitis ipsa
                libero modi praesentium.
            </div>
            <div>Aut cumque esse neque possimus quibusdam repudiandae! Aspernatur assumenda, consequuntur culpa cum hic
                impedit in, molestiae nobis nulla, optio pariatur praesentium quisquam temporibus! Placeat ratione
                reprehenderit saepe sit tempore tenetur.
            </div>
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