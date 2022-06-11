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
        <a class="nav-link active" href="index.php">pagina inicial</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="lista.php">lista</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">cadastro</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>lista de usuarios</h1>
                <?php require("select2.php"); ?>
            </div>
        </div>
    </div>
</body>
</html>