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

<div class="overlay">
    <div class="imgOverlay" style="background-image:url({{url('/')}}/img/sausage.jpg)"></div>
        <div class="box">
            <h1>Movie Name</h1>
            <div class="content">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci odit pariatur quasi saepe similique.
                    Corporis, expedita, quo? Aliquid commodi delectus, doloribus illum in, placeat praesentium repellendus
                    rerum tenetur voluptates voluptatibus!
                </div>
                <div>Autem cupiditate dolore incidunt libero magni nemo placeat recusandae tempore vitae! Consequuntur
                    debitis distinctio eaque eius excepturi ipsa, nobis pariatur? Atque beatae dolores, eligendi incidunt
                    maiores repudiandae saepe similique sit.
                </div>
                <div>A consectetur dolorem doloremque doloribus eveniet, illum ipsam modi neque nobis nulla numquam officia
                    officiis optio provident quo recusandae rerum soluta unde? Aliquid eius eveniet impedit omnis pariatur
                    quasi ut!
                </div>
                <div>Aliquam architecto assumenda aut beatae, culpa dignissimos dolore dolorum eius eum hic magni neque
                    nihil odio omnis, quis reiciendis unde voluptas, voluptatum? Architecto fuga inventore omnis pariatur
                    reprehenderit vero voluptatibus!
                </div>
                <div>Alias blanditiis illum laboriosam sed temporibus. Accusamus consequuntur cum cupiditate delectus
                    deleniti dolorem eligendi, enim facilis hic illum laboriosam magni maiores maxime modi molestiae nisi
                    ratione sequi tenetur, totam vitae?
                </div>
                <div>Accusantium consequuntur cupiditate distinctio dolore eius libero molestiae nemo odit porro quidem
                    reprehenderit saepe, sed, veritatis. Cupiditate ea fugiat, ipsum maiores minima necessitatibus nemo
                    nostrum, numquam pariatur porro quidem reprehenderit?
                </div>
                <div>Ducimus et facilis sapiente. Ad animi corporis dolorem. Assumenda, cumque dolorum ducimus esse
                    excepturi fuga fugit incidunt inventore ipsam ipsum laborum libero magni nesciunt nihil odio pariatur
                    possimus quisquam veritatis.
                </div>
                <div>Ab blanditiis commodi dolor ducimus facilis illo impedit in iure, iusto labore, maiores mollitia nam
                    neque nisi pariatur repudiandae, similique sint ullam vel voluptates. Eaque illum ipsam officiis
                    possimus sint.
                </div>
                <div>A accusamus, aperiam asperiores assumenda delectus dignissimos ea eaque eligendi impedit laborum,
                    laudantium libero molestias necessitatibus non quis repellendus sapiente ullam vero. Accusamus aliquam
                    consequuntur deserunt dolor eaque ullam voluptates.
                </div>
                <div>A ab adipisci alias aliquam delectus deleniti distinctio doloremque ea enim est illo laboriosam laborum
                    maiores neque nesciunt nobis perferendis quae qui ratione, recusandae sed tempora totam voluptatum! Est,
                    perferendis.
                </div>
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

        $('body').on('click', function() {
            $('.overlay').addClass("show");
        });
    });

    $(window).on("hashchange", function() {
        checkHash();
    });
</script>
@endsection