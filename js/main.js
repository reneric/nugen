jQuery(function($){
$('#intro .flexslider ul.slides li').cssBackgroundReady(function () {
    this.each(function () {
        $(this).css('opacity', 1);
    });
});
})