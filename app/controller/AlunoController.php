<?php

include_once '../models/Aluno.php';

class AlunoController
{
    function create(Aluno $aluno)
    {
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=teste_json;user=postgres;password=1q');

        $nome = $aluno->getNome();
        $altura = $aluno->getAltura();
        $idade = $aluno->getIdade();

        $statement = $pdo->prepare("INSERT INTO alunos (nome, altura, idade) VALUES (:nome, :altura, :idade)");
        $statement->execute([
          ":nome" => $nome,
          ":altura" => $altura,
          ":idade" => $idade
        ]);
    }

    function listarAluno() {
      $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=teste_json;user=postgres;password=1q');

      $sql = "SELECT * FROM alunos";

      $statement = $pdo->prepare($sql);
      $statement->execute();

      $aluno = $statement->fetchAll(PDO::FETCH_OBJ);

      return $aluno;
    }
}
