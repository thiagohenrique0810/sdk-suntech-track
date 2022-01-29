<?php


//REALIZANDO TESTES


//incluindo lib
include_once '../SuntechAPI.php';


$options = [
	'key' => '17bfae24cd65753c0a577e8f65a405cf',
	'sandbox' => true,
];

$suntech = new SuntechAPI($options);

$data = [
	"cpfcnpj" 		=> "09191332402",
	"name" 			=> "Fulano de tal caike",
	"email" 		=> "fulano@stctecnologia.com.br",
	"status"		=> "1",
	"zipcode"		=> "55555555",
	"city"			=> "8753",
	"usertype"		=> "J",
	"ierg"			=> "Insento",
	"address"		=> "Rua Exemplo",
	"neighbourhood"	=> "Centro",
	"complement"	=> "apartamento 11",
	"info"			=> "Observações do cliente",
	"login"			=> "fasdfasdf4df8",
	"pass"			=> "895416"
];

print_r($suntech->addClient($data));


