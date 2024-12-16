<?php
include 'conexaoBD.php';

function mostrarCarro($codigoP)
{
    connect();
    $resultados = query("SELECT * FROM carro WHERE codigoP=$codigoP");
    close();
    return $resultados;
}

function excluirCarro($codigoP)
{
    connect();
    query("DELETE FROM carro WHERE codigoP=$codigoP");
    close();
}

?>