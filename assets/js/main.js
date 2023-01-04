$(function() {
    var ww = $(window).width();
    var wh = $(window).height();
    var navbar = $(".navbar");
    var date = new Date();
    var year = date.getFullYear();
    console.log(year);
    document.getElementById('prava').innerHTML = "<small>Copyright &copy; RDdesign " + year + ". All Rights Reserved</small>";
    // var shrinkNavbar = function() {
    //     setTimeout(function() {
    //         // $(".navbar").addClass("compressed");
    //         $("#naslov").css({ "transition": "all 1.9s", "margin-bottom": "0px", "margin-top": "-280px" });
    //         setTimeout(function() {
    //             // $(".navbar").addClass("compressed");
    //             $("#naslov").css("display", "none");
    //             $(".navbar h3").css({ "display": "block", "color": "$svetloplava" });
    //         }, 1200);
    //     }, 3400);
    // }

    function loadCounter() {
        if (typeof(Storage) !== "undefined") {
            if (sessionStorage.loadCounter) {
                sessionStorage.loadCounter = Number(sessionStorage.loadCounter) + 1;
            } else {
                sessionStorage.loadCounter = 1;
            }
        } else {
            return;
        }
    }
    loadCounter();
    // console.log(sessionStorage.loadCounter);
    // if (sessionStorage.loadCounter > 1) {
    //     $("#naslov").remove();
    //     // $(".navbar").addClass("compressed");
    //     $(".navbar h3").css({ "display": "block", "color": "$svetloplava" });

    // } else {
    //     var naslov = '<div class="container" id="naslov"><h3 class="text-center w-100">PRO-TECHNOLOGY Electronics</h3><p class="text-center">Vam nudi opremu, sisteme, ESD odeću i podove za elektronsku proizvodnju i servis elektronike</p></div>';
    //     $("#zaNaslov").append(naslov);
    //     shrinkNavbar();

    // }
    // var navbar = $(".navbar");
    // var navHeight = navbar.outerHeight();
    // $(".main-div").css({"margin-top": navHeight})
    console.log(ww, wh);
    // if(wh==720 && ww==540) {
    //     console.log('7vh');
    //     navbar.css({'height': '7vh'});
    // }
    // if(wh==820 && ww==1180) {
    //     console.log('5vh');
    //     navbar.css({'height': '5vh'});
    // }
    // if(wh==600 && ww==1024) {
    //     console.log('9vh');
    //     navbar.css({'height': '9vh'});
    // }
    if(wh/ww < 1.34 && wh/ww > 1.32 ) {
        console.log('da 1.3');
        navbar.css({'height': '6vh'});
    }
    if(wh/ww < 1.48 && wh/ww > 1.41 ) {
        console.log('da 1.4');
        navbar.css({'height': '5vh'});
    }
    if(wh/ww < 1.52 && wh/ww > 1.49 ) {
        console.log('da 1.5');
        $('#logo p:first-of-type').css({'font-size': '22px'});
        $('#logo p:last-of-type').css({'font-size': '16px'});
        $('.title-holder p:first-of-type').css({'font-size': '55px'});
        $('.title-holder p:last-of-type').css({'font-size': '39px'});
        $('.title-holder h1').css({'font-size': '30px'});
    }
    if(wh/ww < 1.72 && wh/ww > 1.69 ) {
        console.log('da 1.7');
        navbar.css({'height': '9vh'});
    }
    if(wh/ww < 0.60 && wh/ww > 0.56 ) {
        console.log('da 0.6');
        navbar.css({'height': '9vh'});
    }

    // DEVICE > 767px --------------------------------------------------------------------
    if ($(window).width() > 767 && $(window).width() < 1023) {
        $("div.recom-card").addClass("col-md-5");
        // $("#carouselExampleIndicators").css("height", "45vh!importatnt");
    }
    var marginaPartner = 10;
    var brPartnera = 4;

    //  767px > DEVICE > 321px -----------------------------------------------------------
    if ($(window).width() <= 768 && $(window).width() >= 320) {
        marginaPartner = 3;
        brPartnera = 2;
        $(".col-sm-12#img-sm-center").addClass("text-center");
        $('img[data-enlargable]').addClass('img-enlargable').click(function(){
            var src = $(this).attr('src');
            $('<div>').css({
                background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
                backgroundSize: 'contain',
                width:'100%', height:'100%',
                position:'fixed',
                zIndex:'10000',
                top:'0', left:'0',
                cursor: 'zoom-out'
            }).click(function(){
                $(this).remove();
            }).appendTo('body');
        });
    }
    if ($(window).width() <= 1200) {
        // $(".navbar h6").css({ "display": "block", "margin-top": "10px", "margin-right": "0px", "color": "rgb(47, 187, 230)", "font-size": "1rem" });
    }

    // if ($(window).width() >= 892) {
    //     $("#menu-ul li").mouseover(function() {
    //         $("span", $(this)).css("visibility", "visible");
    //     });
    //     $("#menu-ul li").mouseleave(function() {
    //         $("span", $(this)).css("visibility", "hidden");
    //     });
    // }

    $('div.navbar-collapse ul li a').click(function() {
        $('div.navbar-collapse').removeClass("show");
    });


    //  toggler
    // var clickCount = 0;
    // $("button#triangle-up").click(function() {

    //     $(this).attr("id", "triangle-down");
    //     clickCount++;
    //     console.log(clickCount);
    //     $("span.navbar-toggler-icon").css("margin-top", "-80px");
    //     if (clickCount % 2 == 0) {
    //         $("button#triangle-down").attr("id", "triangle-up");
    //         console.log("usao");
    //         $("span.navbar-toggler-icon").css("margin-top", "12px");
    //     }
    // });

    
    // console.log(document.title);

    // EFFECTS navbar    --------------------------------------------------------------------
    $('.dropdown-menu-right').mouseover(function() {
        $('.dropdown-menu.categories').css({ "display": "block"});
    });
    $('.dropdown-menu.categories').mouseleave(function() {
        $(this).css({ "display": "none"});
    });
    if (document.title === "Pro-technology Electronics sistemi za PCB montažu,lemilice,antistatik") {
        $(".nav-item:first-of-type").addClass('aktivna');
        $(window).on('scroll', () => {
            let hero = document.getElementById('hero').getBoundingClientRect().bottom;
            let scrollPosition = $(window).scrollTop();
            if (hero < scrollPosition) {
                navbar.addClass('d-flex');
            } else {
                navbar.removeClass('d-flex');
            }
        });
    }
    if (document.title === "Sistemi za PCB montažu,lemilice, antistatik, video mikroskopi, roboti") {
        navbar.addClass("d-flex");
        $(".nav-item:last-of-type").addClass('aktivna');
    }

    // EFFECTS menu    --------------------------------------------------------------------
    $('.recom-card').mouseover(function() {
        $("img", $(this)).css({ "transition": "0.6s", "padding": "0", "opacity": "1" });
        $(this).addClass("myshadowsmall");

    });
    $('.recom-card').mouseleave(function() {
        $("img", $(this)).css({ "padding": "8px", "opacity": "0.67"});
        $(this).removeClass("myshadowsmall");
    });
    if ($('#adminovo').val() != 3) {
        $('#show-for-admin').css("display", "none");
    } 
    // $('.xxx.carousel').carousel({
    //     interval: 2000
    // });
});