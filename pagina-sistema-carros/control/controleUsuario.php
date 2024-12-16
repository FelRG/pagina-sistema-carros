<?php
include '../model/crudUsuario.php';
$opcao = $_POST["opcao"];


switch ($opcao) {
    case 'Cadastrar':
        cadastrarUsuario($_POST["apelido"], sha1($_POST["senha"]), $_POST["celular"]);
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location='../view/cadastrarUsuario.php';</script>";
        break;
    case 'Entrar':
        $apelido = $_POST["apelido"];
        $senha = sha1($_POST["senha"]);
        $resultados = buscarUsuario($apelido);
        foreach ($resultados as $banco);
        if ($apelido === $banco["apelido"]) {
            if ($senha === $banco["senha"]) {
                session_start();
                $_SESSION["apelido"] = $apelido;
                $_SESSION["codigoP"] = $banco["codigoP"];
                header("Location: ../view/home.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location='../view/paginaLogin.php';</script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!');</script>";
            echo "<script>window.location='../view/paginaLogin.php';</script>";
        }
        break;
    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('A sua sessão foi finalizada!');</script>";
        echo "<script>window.location='../view/paginaLogin.php';</script>";

        break;
}