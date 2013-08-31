<form method="post" action="<?=site_url('camp/payment')?>" id="frm-payment">
	<input autocomplete="off" class="valid-required"  placeholder="Название компании" name="ccompany" type="text" />
	<input autocomplete="off" placeholder="Фактический адрес" name="caddress1" type="text" />
	<input autocomplete="off" class="valid-required"  placeholder="Юридический адрес" name="caddress2" type="text" />
	<input autocomplete="off" class="valid-required"  placeholder="ИНН" name="cinn" type="text" />
	<input autocomplete="off" placeholder="КПП" name="ckpp" type="text" />
	<input autocomplete="off" class="valid-phone-number valid-required"  placeholder="Основной телефон" name="cphone" type="text" />
	<a href="#" id="payment" class="btn">Сформировать счет</a>
</form>