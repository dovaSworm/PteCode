$(function() {
    var ww = $(window).width();
    var wh = $(window).height();
    var navbar = $(".navbar");
    var date = new Date();
    var year = date.getFullYear();
    console.log(year);
    document.getElementById('prava').innerHTML = "<small>Copyright &copy; RDdesign " + year + ". All Rights Reserved</small>";

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

    $(".title-logo-holder").addClass("title-anima");
    $(".dropdown-menu").addClass("nav-anima");
    $(".title-info").addClass("h1-anima");
    // DEVICE > 767px --------------------------------------------------------------------
    if ($(window).width() > 767 && $(window).width() < 1023) {
        $("div.recom-card").addClass("col-md-5");
    }
    var marginaPartner = 10;
    var brPartnera = 4;

    //  767px > DEVICE > 321px -----------------------------------------------------------
    if ($(window).width() <= 768 && $(window).width() >= 320) {
        marginaPartner = 3;
        brPartnera = 2;
        $(".col-sm-12#img-sm-center").addClass("text-center");
    }
    $('div.navbar-collapse ul li a').click(function() {
        $('div.navbar-collapse').removeClass("show");
    });
    // EFFECTS navbar    --------------------------------------------------------------------
    $('.dropdown-menu-right').mouseover(function() {
        $('.dropdown-menu.categories').css({ "display": "block"});
    });
    $('.dropdown-menu.categories').mouseleave(function() {
        $(this).css({ "display": "none"});
    });
    if (document.title === "Pro-Technology electronics sistemi za PCB montažu,lemilice,antistatik") {
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
        $(".main-div").css({"padding-top": "70px"});
    }

    // EFFECTS recommended    --------------------------------------------------------------------
    $('.recom-card').mouseover(function() {
        $("img", $(this)).css({ "transition": "0.6s", "padding": "0", "opacity": "1" });
        $(this).addClass("myshadowsmall");

    });
    $('.recom-card').mouseleave(function() {
        $("img", $(this)).css({ "padding": "8px", "opacity": "0.67"});
        $(this).removeClass("myshadowsmall");
    });
    //za admina
    if ($('#adminovo').val() != 3) {
        $('#show-for-admin').css("display", "none");
    } 
    // $('.xxx.carousel').carousel({
    //     interval: 2000
    // });
});