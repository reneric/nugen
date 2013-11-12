jQuery(function($){
$('#intro .flexslider ul.slides li').add('.mapframe').cssBackgroundReady(function () {
    this.each(function () {
        $(this).css('opacity', 1);
    });
});
$('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav: false
              });
})