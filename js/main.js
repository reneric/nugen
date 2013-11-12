jQuery(function($){
$('.mapframe').cssBackgroundReady(function () {
    this.each(function () {
        $(this).css('opacity', 1).addClass('loaded');
    });
});
$('#intro .flexslider ul.slides li').cssBackgroundReady(function () {
    this.each(function () {
        $('#intro .flexslider .flex-viewport').css('opacity', 1).addClass('loaded');
    });
});
$('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav: false
              });
})