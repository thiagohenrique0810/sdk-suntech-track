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
	"page" => "1"
];

print_r($suntech->listAllDevice($data));


