<form method="post" action="<?=site_url('camp/register')?>" id="frm-register">
	<input class="valid-email valid-required" autocomplete="off" placeholder="E-mail" name="email" type="text" />
	<input class="valid-required" autocomplete="off" placeholder="Фамилия" name="lname" type="text" />
	<input class="valid-required" autocomplete="off" placeholder="Имя" name="fname" type="text" />
	<input class="valid-required" autocomplete="off" placeholder="Место работы" name="company" type="text" />
	<input class="valid-required" autocomplete="off" placeholder="Должность" name="position" type="text" />
	<input type="checkbox" value="1" name="subscribe" /> 
	<label for="subscribe">Подписаться на будущие события</label>
	<a href="#" id="rsubmit" class="btn">Зарегистрироваться</a>
</form>