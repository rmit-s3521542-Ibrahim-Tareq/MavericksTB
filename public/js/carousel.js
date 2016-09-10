/*
    A custom carousel written by Nicholas Zuccarelli
 */

$(document).ready(function()
{
    var timer = 5000;
    var stopTimer = 10000;
    var int = null;
    var isDoing = false;

    var timeout = null;

    $("header div.carousel").each(function(i)
    {
        $(this).attr("data-id", i);
        $("header div.flipper").append("<a data-id='"+i+"'></a>");
        if($(this).hasClass("active"))
        {
            var thisImg = $(this).attr("data-image");
            $("body > div.imgCont > div.largeImage").css("background-image", "url("+thisImg+")").fadeIn(1000);
            $("header div.flipper > a[data-id='"+i+"']").addClass("active");
        }
    });

    function timerFunc(stopAt)
    {
        var flip, link, nextLink, nextFlip;

        flip = $("header div.flipper > a.active");
        link = $("header div.content > div.carousel.active");

        if(flip.length > 1)
        {
            $("header div.content > div.carousel.active").removeClass("active");
            $("header div.flipper > a.active").removeClass("active");
        }

        if(link.length < 1)
        {
            $("header div.content > div.carousel[data-id='0']").addClass("active");
            $("header div.flipper > a[data-id='0']").addClass("active");
        }

        if(stopAt != null && stopAt.length > 0)
        {
            nextLink = $("header div.content > div.carousel[data-id='"+stopAt+"']");
            nextFlip = $("header div.flipper > a[data-id='"+stopAt+"']");
        }
        else
        {
            nextLink = link.next("div.carousel");
            nextFlip = flip.next("a");
        }

        if(nextLink.length < 1 && nextFlip.length < 1)
        {
            nextLink = $("header div.content > div.carousel[data-id='0']");
            nextFlip = $("header div.flipper > a[data-id='0']");
        }

        if(nextLink.is(":visible"))
        {
            return;
        }

        $("body > div.imgCont > div.largeImage").hide('fade', 250, function()
        {
            $(this).remove();
        });

        flip.removeClass("active");
        link.hide('blind', 350, function() {
            link.removeClass("active").css("display","");

            nextFlip.addClass("active");
        });

        var thisImg = nextLink.attr("data-image");

        nextLink.show('fade',350).addClass("active");
        $('<div class="largeImage" style="background-image:url('+thisImg+');"></div>').prependTo("div.imgCont").show('fade', 350);
    }

    function resetTimer(cur)
    {
        if(cur != null && cur.length > 0)
        {
            clearInterval(int);
            timerFunc(cur);
            if(timeout == null)
            {
                timeout = setTimeout(function(){
                    int = setInterval(function()
                    {
                        timerFunc()
                    }, timer);
                    timeout = null;
                },stopTimer);
            }
        }
        else
        {
            int = setInterval(function()
            {
                timerFunc()
            }, timer);
        }
    }

    $("header div.flipper > a").click(function()
    {
        var flip = $(this);
        var thisAttr = flip.attr("data-id");
        resetTimer(thisAttr);
    });

    resetTimer();
});