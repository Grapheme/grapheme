<form method="post" action="<?=site_url('camp/payment')?>" id="frm-payment">
	<input class="valid-required"  placeholder="Название компании" name="ccompany" type="text" />
	<input  placeholder="Фактический адрес" name="caddress1" type="text" />
	<input class="valid-required"  placeholder="Юридический адрес" name="caddress2" type="text" />
	<input class="valid-required"  placeholder="ИНН" name="cinn" type="text" />
	<input  placeholder="КПП" name="ckpp" type="text" />
	<input class="valid-phone-number valid-required"  placeholder="Основной телефон" name="cphone" type="text" />
	<a href="#" id="payment" class="btn">Сформировать счет</a>
</form>