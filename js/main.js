function animateOnLoad() {
	var $fTop = $('.promo h1');
	var $fBot = $('.promo .company-desc');	
	$fTop.animate({ opacity: '1' }, 800 ).css({'-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'}); 
	$fBot.animate({ opacity: '1' }, 800 ).css({'-webkit-transform': 'translate3d(0px, 0px, 0px)', '-ms-transform': 'translate(0px, 0px)', 'transform': 'translate(0px, 0px)'});	
}