<?php


//REALIZANDO TESTES

//tipos de comandos
/*
* Enable1 - Habilitar saída 1
* Disable1 - Desabilitar saída 1
* Enable2 - Habilitar saída 2
* Disable2 - Desabilitar saída 1
* SetOdometer - Ajustar Odômetro
* serialCommand - Enviar comando pela serial do rastreador
*/


//incluindo lib
include_once '../SuntechAPI.php';


$options = [
	'key' => '17bfae24cd65753c0a577e8f65a405cf',
	'sandbox' => true,
];

$suntech = new SuntechAPI($options);

$data = [
	"user" => "stc",
	"pass" => "e725df0794b817f84db1e813c3512b21",
	"plate" => "ABC1234",
	"command" => "Enable1"
];

print_r($suntech->sendCommands($data));


