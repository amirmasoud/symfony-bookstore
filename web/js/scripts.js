$(document).ready(function() {
    $('#content article').hover(function(){
            $("figcaption", this).stop().animate({opacity:'1'},{queue:false,duration:300});
    }, function() {
            $("figcaption", this).stop().animate({opacity:'0'},{queue:false,duration:300});
    });
    $("#search-nav").click(function(){
        $("#searchform").fadeToggle();
    });
});