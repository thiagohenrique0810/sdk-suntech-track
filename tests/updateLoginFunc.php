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
	"loginId"	=> 8,
	"command"	=> 0,
	"fence"	=> 0,
	"isca"	=> 1,
	"convoy"	=> 1,
	"setup"	=> 1,
	"logistics"	=> 1,
	"groups"	=> 1,
	"maintenance"	=> 0,
	"workingHours"	=> 1,
	"subaccount"	=> 1,
	"events"	=> 1,
	"reports"	=> 0,
	"associate"	=> 0,
	"temperature"	=> 1,
	"collaborativeNetwork"	=> 1,
	"commandCollaborativeNetwork"	=> 1,
	"appAf"	=> 1,
	"gridHorimeter"	=> 1,
	"gridOutput3"	=> 1,
	"appLimited"	=> 1,
	"users"	=> 0,
	"routing"	=> 0,
	"commandKeyboard"	=> 0
];

print_r($suntech->updateLogin($data));


