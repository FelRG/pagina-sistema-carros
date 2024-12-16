<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Home</title>
</head>

<body>
        <?php
        session_start();
        if (isset($_SESSION["apelido"])) {
            $apelido = $_SESSION["apelido"];
        } else {
            header("Location: paginaLogin.php");
        }
        ?>

<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark"">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Carro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" aria-current="page" href="home.php">Visualizar</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $apelido ?>
                        </a>
                        <ul class="dropdown-menu">
                        <li>
                            <form method="POST" action="../control/controleUsuario.php" class="dropdown-item">
                                <button type="submit" name="opcao" value="Sair" class="btn btn-link" style="text-decoration: none;color:#cbcbcb;">Sair</button>
                            </form>
                        </li>        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>







    <div class="container-fluid">
        <?php
            echo '<br><style="margin-right: 20px;"><h5>Seja bem-vindo(a), ', $_SESSION["apelido"], '.<h5></style>';
        ?>
    </div>
    <br>
    


    <div class="container mt-5 larguramedia2">
        <br>
        <h1 class="centrotext">Carros cadastrados</h1> 
        <br><br>
        <div class="table-container">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">Nome da marca</th>
                    <th scope="col">Opção</th>
                </tr>
            </thead>

            <?php
            include '../model/crudCarro.php';
            $codigoP=$_SESSION["codigoP"];
            $resultados = mostrarCarro($codigoP);
            foreach ($resultados as $linha) {
                echo "
                <tr>
                    <td>$linha[marca]</td>
                    <td>
                    <form method='POST' action='../control/controleCarro.php'>
                        <button type='submit' class='btn btn-danger' name='opcao' value='Excluir'>Excluir</button>
                        <input type='hidden' name='codigoP' value='$linha[codigoP]'>
                    </form>
                    
                    </td>
                </tr>
                ";
            }
            ?>

        </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>