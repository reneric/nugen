jQuery(function($){
$('#intro .flexslider ul.slides li').add('.mapframe').cssBackgroundReady(function () {
    this.each(function () {
        $(this).css('opacity', 1);
    });
});
})