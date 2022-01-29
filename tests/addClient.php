<?php


//REALIZANDO TESTES


//incluindo lib
include_once 'SuntechAPI.php';

$options = [
	'key' => '17bfae24cd65753c0a577e8f65a405cf',
	'sandbox' => true,
];

$suntech = new SuntechAPI($options);

$suntech->client->setCpfcnpj('123456789');
$suntech->client->setName('Fulano de tal caike');
$suntech->client->setEmail('fulano@stctecnologia.com.br');
$suntech->client->setZipcode('55555555');
$suntech->client->setCity('8753');
$suntech->client->setAddress('Rua Exemplo');
$suntech->client->setNeighbourhood('Centro');
$suntech->client->setComplement('apartamento 11');
$suntech->client->setInfo('Observações do cliente');





print_r($suntech->client->add($data));


