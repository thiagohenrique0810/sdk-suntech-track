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
	"user" => "stc",
	"pass" => "e725df0794b817f84db1e813c3512b21"
];

print_r($suntech->lastPositionDevice($data));


