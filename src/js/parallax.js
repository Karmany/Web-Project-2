function simpleParallax() {
var scrolled = $(window).scrollTop() + 1;
$('#header').css('background-position', '0' + -(scrolled * 0.2) + 'px');
}
$(window).scroll(function (e) {
simpleParallax();
});