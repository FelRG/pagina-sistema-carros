<?php

include 'conexaoBD.php';

function cadastrarUsuario($apelido, $senha, $celular)
{
    connect();
    query("INSERT INTO proprietario (apelido, senha, celular) VALUES ('$apelido', '$senha', '$celular')");
    close();
}

function buscarUsuario($apelido)
{
    connect();
    $resultados = query("SELECT * FROM proprietario WHERE apelido ='$apelido'");
    close();
    return $resultados;
}