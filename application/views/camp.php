<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?=$this->load->view('includes/head',array('title'=>'Мастер-класс Максима Костенко | Creative Camp | Графема','description'=>'Мастер-класс для дизайнеров и иллюстраторов, которые хотят познакомиться и получить практические советы от одного из лучших российских иллюстраторов.'))?>
	<link rel="stylesheet" href="<?=base_url('css/camp.css');?>">
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.css');?>" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Serif" type="text/css">
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. 
	Please <a href="http://browsehappy.com/">upgrade your browser</a> or 
	<a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
	<?=$this->load->view('includes/header');?>
	<article class="text">
		<section class="camp-header clearfix">
		<div class="container clearfix">
			<div class="date"><strong>19</strong> сентября</div>
			<div class="camp-logo">
				<a href="<?=site_url('camp');?>">
					<img src="<?=base_url('img/camp-logo.png');?>" alt="Графема креативный кампус" />
				</a>
			</div>
			<div class="register">
				Чтобы принять участие в мастер-классе
				<a onclick="yaCounter8036941.reachGoal('register'); return true;" href="#camp-registration">Зарегистрируйтесь</a>
			</div>
		</div>
		</section>
		<section class="illustration clearfix">
		<div class="container">
			<div class="place">Свободное пространство <br/><strong>«Циферблат»</strong></div>
			<div class="discount">Зарегистрируйся сейчас <br/>и сэкономь 2000 руб.</div>
		</div>
		</section>
		<section class="axes"> </section>
		<section class="camp-desc">
		<div class="container">
			<div class="content-block clearfix">
				<figure>
					<img src="<?=base_url('img/goat.png')?>" alt="Креативная кампус - Зачем?" />
				</figure>
				<div class="camp-desc-item">
					<p>
						Если ты хочешь развиваться и расти, необходимо общаться и получать опыт от лучших представителей 
						твоей индустрии. На первом мастер-классе в кампусе выступит Максим Костенко, московский иллюстратор 
						с мировым именем. Сейчас Максим работает с крупнейшими агентствами мира и является победителем в 
						конкурсе известного американского агентства Richard Solomon. Его работы пронизаны теплом, 
						добротой и харизмой.
					</p>
				</div>
			</div>
			<div class="content-block clearfix">
				<figure>
					<img src="<?=base_url('img/axes.png')?>" alt="Креативная кампус - Кого ждем?" />
				</figure>
				<div class="camp-desc-item">
					<p>
						Мы ждем дизайнеров и иллюстраторов, которые хотят познакомиться и получить практические советы от 
						одного из лучших российских иллюстраторов. Максим расскажет о том, что необходимо для создания 
						успешной и оригинальной иллюстрации. Вы сможете увидеть не только финальный результат, но и 
						внутреннюю кухню.
					</p>
				</div>
			</div>
			<div class="content-block clearfix">
				<figure>
					<img src="<?=base_url('img/zubr.png')?>" alt="Креативная кампус - Для кого?" />
				</figure>
				<div class="camp-desc-item">
				Мастер-класс предназначен:
					<ul>
						<li>&mdash; для начинающих и уже работающих иллюстраторов;</li>
						<li>&mdash; для студентов творческих специальностей, практикующих дизайнеров и арт-директоров;</li>
						<li>&mdash; для тех кто хочет получить навыки по созданию мощных композиций, подбору подходящих цветовых решений, изучить различные материалы и методы их использования;</li>
						<li>&mdash; для тех, кто хочет развиваться.</li>
					</ul>
				</div>
			</div>
		</div>
		</section>
		<section class="camp-cost">
			<div class="container">
				<div class="header">Стоимость участия</div>
				<div class="cost-blocks">
					<div class="item">
						&mdash; до 02.09.13 &mdash;
						<strong>2000 р.</strong>
					</div>
					<div class="item">
						&mdash; до 18.09.13 &mdash;
						<strong>3500 р.</strong>
					</div>
					<div class="item">
						&mdash; 19.09.13 &mdash;
						<strong>4500 р.</strong>
					</div>
				</div>
			</div>
		</section>
		<section id="camp-registration" class="camp-registration">
			<div class="container">
				<div class="step-1">
					<div class="header">Регистрация</div>
					<p>
						Чтобы зарегистрироваться на это событие, заполните анкету. Информация о Вас будет доступна только 
						организаторам этого события, и больше никому. Все поля являются обязательными.
					</p>
					<?php $this->load->view('forms/camp-register');?>
				</div>
				<div class="step-2">
					<div class="header">Оплатите участие</div>
					<p>
						Номер счета: <strong><span class="order-number"></span></strong> <br/>
					<?php 
						$summa = 2000; $summaWords = 'две тясычи';
						$now = time();
						if($now >= strtotime('02.09.2013') && $now < strtotime('18.09.2013')):
							$summa = 3500; $summaWords = 'три тясычи пятсот';
						elseif($now >= strtotime('18.09.2013')):
							$summa = 4500; $summaWords = 'четыре тясычи пятсот';
						endif;
					?>
						Сумма к оплате: <strong><?=$summa;?></strong> <?=$summaWords;?> рублей 00 копеек
					</p>
					<p>
						После поступления оплаты Вы получите письмо с дальнейшими инструкциями. 
					</p>
					<p>
						<strong>Оплата через систему Яндекс.Деньги</strong> <br/>
						Для оплаты через систему Яндекс.Деньги осуществите прямой платёж на кошелёк 410011000165476. <br/>
						В комментарии к платежу обязательно укажите Ваши ФИО и/или номер оплачиваемого счёта.
					</p>
					<p class="aleft">
						<strong>Оплата через систему WebMoney</strong> <br/>
						Для оплаты через систему WebMoney осуществите прямой платёж на кошелёк R258145967104. <br/>
						В комментарии к платежу обязательно укажите Ваши ФИО и/или номер оплачиваемого счёта.
					</p>
					<p class="aleft">
						<a href="#" id="order"><strong>Безналичный расчет</strong></a>
					</p>
					<?php $this->load->view('forms/camp-payment');?>
				</div>
				<div class="step-3">
					<div class="header">Спасибо за заявку</div>
						<p>
							Счет номер <strong><span class="order-number"></span></strong> на посещение мероприятия "Мастер-класс Максима Костенко" 
							будет отправлен вам по email в течение 30 минут.
						</p>
						<p>
						Если вы не получили письмо, пожалуйста свяжитесь с нами по указанным ниже телефонам.
					</p>
				</div>
			</div>
		</section>
		<section class="camp-organizators">
			<div class="container clearfix">
				<div class="column">
					<h3>Контакты организаторов</h3>
					<div class="name-wrapper clearfix">
						<div class="name">Самойлов Андрей</div>
						<div class="contacts">
							+7 (909) 428-12-34 <br/>
							<?=safe_mailto('andrey@grapheme.ru','andrey@grapheme.ru');?>
						</div>
					</div>
					<div class="name-wrapper clearfix">
						<div class="name">Юрченко Юрий</div>
						<div class="contacts">
							+7 (919) 894-44-44 <br/>
							<?=safe_mailto('ad@grapheme.ru','ad@grapheme.ru');?>
						</div>
					</div>
				</div>
				<div class="column">
					<h3>Место проведения</h3>
					<div class="place">
						Свободное пространство «Циферблат»
					</div>
					<address>
						г.Ростов-на-Дону, <br/>
						просп.Соколова, 46
					</address>
				</div>
			</div>
		</section>
	</article>
	<?=$this->load->view('includes/footer');?>
	<?=$this->load->view('includes/facebook');?>
	<?=$this->load->view('includes/scripts');?>
	<script type="text/javascript" src="<?=site_url('js/vendor/jquery.form.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/libs/base.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('js/guest.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('js/libs/bootstrap.js');?>"></script>
	<?=$this->load->view('includes/metrika');?>
	<?=$this->load->view('includes/analytics');?>
</body>
</html>
