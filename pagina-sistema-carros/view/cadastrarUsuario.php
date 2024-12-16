<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastrar Usuário</title>
</head>

<body>

    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="paginaLogin.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cadastrarUsuario.php">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 larguralogin">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <br>
                <h1 class="text-center">Cadastrar Usuário</h1>
                <form method="POST" action="../control/controleUsuario.php">
                    <div class="form-group mb-3 larguraform">
                        <label for="apelido">Usuário:</label>
                        <input type="text" class="form-control" id="apelido" name="apelido"
                            placeholder="Seu nome de usuário" maxlength="50" required>
                    </div>
                    <div class="form-group mb-3 larguraform">
                <label for="senha">Senha:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" maxlength="40" required>
                    
                        <span class="input-group-text" id="olho" onclick="togglePassword('senha', 'olho')">
                            <img src="olho-fechado.png" alt="Visualizar Senha">
                        </span>
                    
                </div>
                    </div>
                    <div class="form-group mb-3 larguraform">
                        <label for="celular">Celular:</label>
                        <input type="text" class="form-control" id="celular" name="celular"
                            placeholder="Seu número de telefone" required> 
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark largurabotao" name="opcao"
                            value="Cadastrar">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
    function togglePassword(inputId, eyeId) {
      const passwordInput = document.getElementById(inputId);
      const eyeIcon = document.getElementById(eyeId);

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.innerHTML = '<img src="olho-aberto.png" alt="Ocultar Senha">';
      } else {
        passwordInput.type = "password";
        eyeIcon.innerHTML = '<img src="olho-fechado.png" alt="Visualizar Senha">';
      }
    }
  </script>   
  <script>
    jQuery(function($){
        $("#celular").mask("(99)99999-9999");
    });
  </script>
</body>

</html>