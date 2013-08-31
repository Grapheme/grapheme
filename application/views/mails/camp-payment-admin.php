<p>Привет! Есть заявка на безналичную оплату.</p>
<p>
	Номер заказа <?=str_pad($order['order_id'],3,'0',STR_PAD_LEFT).'/CAMP_1';?><br/>
	Сумма заказа <?=$order['summa'].' '.$order['summa_word'];?> рублей 00 копеек<br/><br/>
	
	От кого:<br/>
	Имя: <?=$order['lname'].' '.$order['fname'];?><br/>
	Место работы: <?=$order['company'];?><br/>
	Должность: <?=$order['position'];?><br/>
	Подписался: <?=$order['subscribe'];?><br/>
	Дата и время заявки: <?=date('d.m.Y H:i');?><br/>
	<br/><br/>
	Название компании:<?=$payment['ccompany'];?><br/>
	Фактический адрес:<?=$payment['caddress1'];?><br/>
	Юридический адрес:<?=$payment['caddress2'];?><br/>
	ИНН:<?=$payment['cinn'];?><br/>
	КПП:<?=$payment['ckpp'];?><br/>
	Основной телефон:<?=$payment['cphone'];?><br/>
</p>