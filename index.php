<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mt-5">
        <div class="card-header">
          <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>