<?php
sleep(2);
$mensagens = [];

$contem_erros = false;
if ($_POST['nome'] == '') {
	$contem_erros = true;
	$mensagens['nome'] = 'O nome está em branco';
}

if ($_POST['idade'] == '') {
	$contem_erros = true;
	$mensages['idade'] = 'A idade está em branco';
}

if(! $contem_erros) {
	// salva no banco...
	echo json_encode([
		'mensagem' => 'salvo com sucesso!',
		'contem_erros' => false
	]);
} else {
	// temos erros a corrigir
	echo json_encode([
		'contem_erros' => true,
		'mensagens' => $mensagens
	]);
}
