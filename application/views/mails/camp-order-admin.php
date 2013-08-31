<p>Привет! Есть <em>новая</em> заявка.</p>
<p>
	Номер заказа <?=str_pad($order['order_id'],3,'0',STR_PAD_LEFT).'/CAMP_1';?><br/>
	Сумма заказа <?=$order['summa'].' '.$order['summa_word'];?> рублей 00 копеек<br/><br/>
	
	От кого:<br/>
	Имя: <?=$order['lname'].' '.$order['fname'];?><br/>
</p>