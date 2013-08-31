<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?=$this->load->view('includes/head',array('title'=>'Графема - рекламное агентство полного цикла c диджитал ориентацией','description'=>'Работа с комплексными интерактивными проектами, сопровождение компаний и создание стратегии онлайн-присутствия, разработка и поддержка сайтов, дизайн и программирование приложений для iPhone и iPad, проектирование интерфейсов, айдентика, интернет-аналитика и исследования.'))?>
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. 
	Please <a href="http://browsehappy.com/">upgrade your browser</a> or 
	<a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
	<?=$this->load->view('includes/header');?>
	<article>
		<section class="promo">
			<video id="v" autoplay loop preload="auto" webkit-playsinline>
					<source src="<?=base_url('video/loop1.mp4');?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					<source src="<?=base_url('video/loop1.webm');?>" type='video/webm; codecs="vp8, vorbis"' />
					<source src="<?=base_url('video/loop1.ogv');?>" type='video/ogg; codecs="theora, vorbis"' />
			</video>
			<div class="overlay"> </div>
			<!--<div class="promo-logo"> </div>-->
			<div class="text">
				<h1>Графема - интерактивное рекламное агентство <br/>с аналитическим мышлением</h1>
				<div class="sep"> </div>
				<div class="company-desc">
					Мы работаем с комплексными интерактивными проектами. Занимаемся проектированием и 
					разработкой приложений для социальных сетей и мобильных устройств. 
					Поддерживаем, сопровождаем сайты и продвигаем бизнес в социальных медиа.
				</div>
			</div>
			<a class="scroll" href="#">
				<img src="<?=base_url('img/scrl.gif');?>" />
			</a>
		</section>
		<section class="portfolio clearfix">
			<div class="clearfix">
				<a href="http://solnechny-club.ru" target="_blank" class="frame1">
					<div class="overlay"> </div>
					<img src="img/f1-sunday.jpg" alt="Сайт для Загородного клуба Солнечный" />
				</a>
				<a href="http://arredamenti.su" target="_blank" class="frame2">
					<div class="overlay"> </div>
					<img src="img/f2-arredamenti.jpg" alt="Сайт для Мебельного салона Арредаменти" />
				</a>
				<a href="http://rivendoors.ru/" target="_blank" class="frame3">
					<div class="overlay"> </div>
					<img src="img/f3-rivendoors.jpg" alt="Сайт для Магазина дверей и декора Riven Doors" />
				</a>
				<a href="http://dev.grapheme.ru/conferum/" target="_blank" class="frame3">
					<div class="overlay"> </div>
					<img src="img/f3-conferum.jpg" alt="Сайт для компании по производству химических средств очистки" />
				</a>
				<a href="#" class="frame2">
					<div class="overlay"> </div>
					<img src="img/f2-journal.jpg" alt="Сайт для Мебельного салона Электронного журнала по физике" />
				</a>
			</div>
			<div class="clearfix">
				<a href="http://www.fendi.com/" target="_blank" class="frame2">
					<div class="overlay"> </div>
					<img src="img/f2-fendi.jpg" alt="Дизайн для клуба клиентов бренда Fendi" />
				</a>	        	
					<a href="http://poolcafe.ru" target="_blank" class="frame2">
					<div class="overlay"> </div>
					<img src="img/f2-poolcafe.jpg" alt="Сайт для Ресторанного комплекса St.Tropez" />
				</a>
			</div>
			<div class="clearfix">
				<a href="http://vinoigristoe.ru" target="_blank" class="frame4">
					<div class="overlay"> </div>
					<img src="img/f4-vinoigristoe.jpg" alt="Сайт для завода Цимлянские вина" />
				</a>
				<a href="http://nikeplus.nike.com/plus/" target="_blank" class="frame4">
					<div class="overlay"> </div>
					<img src="img/f4-nike.jpg" alt="Промо-сайт для компании Nike" />
				</a>
				<a href="http://www.niveausa.com/" target="_blank" class="frame4">
					<div class="overlay"> </div>
					<img src="img/f4-nivea.jpg" alt="Промо-сайт для компании Nivea Man" />
				</a>
				<a href="http://adidas.com" class="frame4">
					<div class="overlay"> </div>
					<img src="img/f4-cska.jpg" alt="Промо-сайт ЦСКА для компании Adidas" />
				</a>
			</div>
		</section>
	</article>
	<?=$this->load->view('includes/footer');?>
	<?=$this->load->view('includes/facebook');?>
	<?=$this->load->view('includes/scripts');?>
	<script type="text/javascript">
		var grapheme = grapheme || {};
			grapheme.video = document.getElementById("v");
			grapheme.percentLoaded = 0,
			grapheme.percentLoadedOld = 0;
		function updateLoadingStatus(){
			try{
				grapheme.percentLoaded = parseInt(((grapheme.video.buffered.end(0) / grapheme.video.duration) * 100));
			}catch(err){}
		}
		function playVideo(){grapheme.video.play();}
		$(function(){
			$('a.scroll, #menu-item-portfolio').click(function(){
				$('html, body').animate({scrollTop: $(".portfolio").offset().top},1000);
			});
			$('a.disabled').click(function(e){e.preventDefault();});
			grapheme.video.addEventListener('progress', updateLoadingStatus, false);
			grapheme.video.addEventListener('canplaythrough', playVideo, false);
			playVideo();
			var t = setInterval(function(){
				if ( grapheme.percentLoaded == grapheme.percentLoadedOld ) { playVideo(); }
				if ( grapheme.percentLoaded > 0 ) { $('#v').maximage('maxcover'); }
				if ( grapheme.percentLoaded == 100 ) { clearInterval(t); }
				grapheme.percentLoadedOld = grapheme.percentLoaded;
			}, 1000);
		});
	</script>
	<?=$this->load->view('includes/metrika');?>
	<?=$this->load->view('includes/analytics');?>
</body>
</html>
