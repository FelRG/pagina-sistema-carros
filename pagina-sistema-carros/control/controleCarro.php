<?php
include '../model/crudCarro.php';
$opcao = $_POST["opcao"];

echo $opcao;

switch ($opcao) {

    case 'Excluir':
        excluirCarro($_POST["codigoP"]);
        header("Location: ../view/home.php");
        break;
}

?>