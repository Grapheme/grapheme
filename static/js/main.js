function animateOnLoad() {
	var $fTop = $('.promo h1');
	var $fBot = $('.promo .company-desc');	
	var $sep = $('.promo .sep');
	$fTop.animate({ opacity: '1' }, 1200 ).css({'-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'}); 
	$fBot.animate({ opacity: '1' }, 1200 ).css({'-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'});	
	$sep.animate({ opacity: '1' }, 1600 );
}