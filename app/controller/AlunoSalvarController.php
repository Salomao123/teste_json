<?php
include_once './AlunoController.php';
include_once '../models/Aluno.php';

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

if (!$contem_erros) {
    $nome = $_POST['nome'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];

    $aluno = new Aluno($nome, $altura, $idade);

    $alunoController = new AlunoController();
    $alunoController->create($aluno);
    echo json_encode([
        'mensagem' => "Salvo com sucesso!",
        'contem_erros' => false,
    ]);
} else {
    // temos erros a corrigir
    echo json_encode([
        'contem_erros' => true,
        'mensagens' => $mensagens,
    ]);
}
