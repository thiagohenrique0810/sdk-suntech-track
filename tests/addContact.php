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
	"clientId" => 4,
	"contacts" => array([
		"name" => "Conatato",
		"phone1" => "23423",
		"phone2" => "342324",
		"phone3" => "4444",
		"phone4" => "222222"
	])
];

print_r($suntech->addContact($data));


