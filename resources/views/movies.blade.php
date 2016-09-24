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

        checkHash();

        function createClicker(toAppend, data, soon) {
            var soon = soon || false;
            toAppend.on("click", function() {
                var overlay = $('<div class="overlay"><div class="imgOverlay" style="background-image:url({{url('/')}}/img/'+data['poster_url']+')"></div><div class="box"><h1>'+data['movie_name']+'</h1><div class="content"></div></div></div>');

                overlay.find('.content').html('<ul class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li><li role="presentation"><a href="#book" aria-controls="book" role="tab" data-toggle="tab">Book Tickets</a></li><li class="pull-right closeOverlay"><a class="glyphicon glyphicon-remove"></a></li></ul>');

                overlay.find('.content').append('<div class="tab-content"><div role="tabpanel" class="tab-pane active" id="details"><div class="row"><div class="col-md-8"><p>'+data['sypnosis']+'</div><div class="col-md-4">RIGHT</div></div></div><div role="tabpanel" class="tab-pane" id="book">BOOK</div></div>');

                overlay.find('.closeOverlay').on('click', function() {
                    overlay.removeClass('show').delay(500).queue(function(next) {
                        overlay.remove();
                        next();
                    });
                });

                $("body").prepend(overlay).delay(0).queue(function(next) {
                    overlay.addClass("show");
                    next();
                });
            });
        }

        $.ajax({
            method: "POST",
            dataType: "JSON",
            url: "{{url('/movies')}}",
            data: { },
            success: function(data) {
                movies = [];

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
                        createClicker(toAppend, data[1][e]);
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