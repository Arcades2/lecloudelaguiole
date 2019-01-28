var lightbox = $('.lightbox');
var lImage = $('.limage');

lightbox.hide();

$('.figurine').on('click', function(e) {
  var bgUrl = this.style.backgroundImage
  lImage.css('background-image', bgUrl);
  lightbox.show();
});

$('.lightbox').on('click', function() {
  $(this).hide();
});