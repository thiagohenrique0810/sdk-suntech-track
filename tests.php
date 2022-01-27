<?php


//REALIZANDO TESTES


//incluindo lib
include_once 'SuntechAPI.php';


$options = [
	'key' => '17bfae24cd65753c0a577e8f65a405cf',
	'sandbox' => true,
];

$suntech = new SuntechAPI($options);


$suntech->stc->client->setName('thiago henrique');


echo $suntech->stc->client->getName();

print_r($suntech->stc->client->listAll());


