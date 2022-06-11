<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto pw2 - pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">pagina inicial</a>
      </li>
     <li class="nav-item">
        <a class="nav-link active" href="lista.php">lista</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="cadastro.php">cadastro</a>
      </li>
    </ul>
    <form action="login.php" class="d-flex">
      <input type="submit" values="login" class="btn btn-outline-info" />
    </form>
  </div>
</nav>
    <div class="container">
        <div class="row">
          <h1>login</h1>
                <form action="validar.php">
                  <div> 
                    <label for="txtNome">Nome: </label>
                    <input type="text" name="txtNome" id="txtNome" placeholder="Nome" class="form-control"/> //se for maiusculo botar maiusculo
                  </div>
                  <div> 
                    <label for="txtSenha">Senha: </label>
                    <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" class="form-control"/> //se for maiusculo botar maiusculo
                  </div>
                  <div>
                    <input type="submit" value="login" class="btn btn-primary"/> //se for maiusculo botar maiusculo
                  </div>
                </form>
        </div>
    </div>
</body>
</html>