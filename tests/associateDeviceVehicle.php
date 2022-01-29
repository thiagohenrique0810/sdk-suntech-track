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
	"to" => "vehicle",
    "id" => 5,
    "date" => date('Y-m-d H:i'),
    "deviceId" => "013395",
    "manufacture" => "st"
];

print_r($suntech->associateDevice($data));


