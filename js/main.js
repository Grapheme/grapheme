function animateOnLoad() {
	var $fTop = $('.promo h1');
	var $fBot = $('.promo .company-desc');	
	var $sep = $('.promo .sep');
	$fTop.animate({ opacity: '1' }, 1200 ).css({'-moz-transform': 'translate(0px, 0px)', '-o-transform': 'translate(0px, 0px)', '-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'}); 
	$fBot.animate({ opacity: '1' }, 1200 ).css({'-moz-transform': 'translate(0px, 0px)', '-o-transform': 'translate(0px, 0px)', '-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'});	
	$sep.animate({ opacity: '1' }, 1600 );
}
function adjustPromoHeight() {
	var winHeight = $(window).height();
	var headerHeight = $('header').height();
	var footerHeight = $('footer').height();
	var resizeBlock = $('article .promo');
	resizeBlock.height( winHeight - ( footerHeight + headerHeight) );
}
$(document).ready( function(){
	adjustPromoHeight();
});
$(window).resize( function(){
	adjustPromoHeight();
});
$(".scroll").click(function() {
    $('html, body').animate({
        scrollTop: $(".portfolio").offset().top
    }, 2000);
});