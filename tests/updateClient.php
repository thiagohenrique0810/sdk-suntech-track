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
	"id"			=> 4,
	"cpfcnpj" 		=> "351311545",
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
	"login"			=> "5asfdgasfd",
	"pass"			=> "65165654"
];

print_r($suntech->updateClient($data));


