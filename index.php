<?php

$aluno = [
	'nome' => 'Paulo Silva',
	'altura' => 1.90,
	'forca' => 'muita',
	'bonito' => true
];
//  echo "Objeto: \n";
// var_dump($aluno);
// echo "JSON: \n";
echo json_encode($aluno);
