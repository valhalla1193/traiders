// var menu = $(".navbar");
//   $(window).scroll(function() {
//     var top = $(this).scrollTop();
//     if ( top <= 800 ) {
//       menu.css("background",'#0a0224fa').css('color','white');
//     } else if ( top >= 801 ) {
//       menu.css("background",'white').css('color','black');
//     }
//   });
// $('#speakersli').click(function(){
//    var x=$('div.container__speakers').scrollTop();
//    alert(x);
// })
$("#speakersli").click(function (){
    $('html, body').animate({
        scrollTop: $(".container__speakers").offset().top-90
    }, 1000);
});

$("#sponsorsli").click(function (){
var x=$('.partnersinfo__join').offset();
var y=x;
$('html, body').animate({
    scrollTop: x.top-100
}, 1000);
});

$("#venueli").click(function (){
    $('html, body').animate({
        scrollTop: $(".container__map").offset().top
    }, 1000);
});

