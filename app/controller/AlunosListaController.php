<?php

include_once './AlunoController.php';

if(!$_GET){
  $alunoController = new AlunoController();
  $lista = $alunoController->listarAluno();

  $data = [$lista];

  echo json_encode([$data]);

}else {
  return null;
}
