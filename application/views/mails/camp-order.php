<p>Привет, <em><?=$order['lname'].' '.$order['fname'];?></em>.</p>
<p>
	Номер заказа <?=str_pad($order['order_id'],3,'0',STR_PAD_LEFT).'/CAMP_1';?><br/>
	Сумма заказа <?=$payment['summa'].' '.$payment['summa_word'];?> рублей 00 копеек
</p>

<br/><br/>
--
Администрация <?=anchor('','Grapheme.ru',array('target'=>'_blank'));?>.