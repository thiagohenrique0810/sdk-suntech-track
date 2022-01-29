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
	"clientId": "108",
    "lisencePlate": "ABC1234",
    "manufacture": "st",
    "model": null,
    "color": "PRETA",
    "status": "1",
    "modelYear": "2015",
    "manufacturingYear": "2015",
    "chassi": "chassi",
    "renavan": "renavan",
    "info": "TESTE UNO",
    "label": "ST300R",
    "email": "devnull@devnull.com",
    "type": "20",
    "driver": "Wendel",
    "phone1": "19951542154",
    "phone2": "19951451235",
    "cpf": "3255416852"
];

print_r($suntech->addModel($data));


