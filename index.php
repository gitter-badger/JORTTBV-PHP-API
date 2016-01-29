<?php
require_once('class.jorttbv.php'); 
$api = new JorttBV_API_CLIENT;
$command = array(
	'invoice' => array(
		'customer_id'=> '',
		'delivery_period'=> '',
		'reference'=> 'test',
		'line_items' => array(
			'vat' => '21',
			'amount' => '1.00',
			'quantity' => '1',
			'description' => ''
		)
	)
);
$api->request($command, 'invoices');