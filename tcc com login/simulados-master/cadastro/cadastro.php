<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Abrindo portas</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Abrindo portas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/abrindo_portas/tcc/sistema_login/login-php/entrar.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>
<center><h2>Cadastro</h2></center>
<br><br>


<?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    
    <center>
    <form method="POST" action="proc_cad_usuario.php">
  <div class="form-row justify-content-center">
    <div class="col-md-3 mb-3">
      <label for="validationDefault01"></label>
      <input type="text" name="nome" class="form-control" id="validationDefault01" placeholder="Nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome'] ?>"required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" name="sobrenome" class="form-control" id="validationDefault02" placeholder="Sobrenome" value="<?php if(isset($_POST['sobrenome'])) echo $_POST['sobrenome'] ?>" required>
    </div>
    <br>
    <div class="col-md-3 mb-3">
      <label for="validationDefaultUsername"></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" name="usuario" class="form-control" id="validationDefaultUsername" placeholder="usuario"
         value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>

  <div class="form-row justify-content-center">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03"></label>
      <input type="email" name="email" class="form-control" id="validationDefault03" placeholder="E-mail" value="<?php if(isset($_POST['email'])) 
      echo $_POST['email'] ?>" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04"></label>
      <input type="password" name="senha" class="form-control" id="validationDefault04" placeholder="Senha" value="<?php if(isset($_POST['senha'])) 
      echo $_POST['senha'] ?>" required>
  </div>
</div>
</div>
</div>

   <br><br>
  <button class="btn btn-primary" name= 'register'  type="submit">Cadastrar-se</button>
</form>
<br><br><br><br><br><br><br><br>
	<!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Abrindo portas &copy; Criado em 2019</p>
    </div>

    <!-- /.container -->
  </footer>