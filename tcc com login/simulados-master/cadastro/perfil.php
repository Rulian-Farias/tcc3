<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Abrindo portas</title>	
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
  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
    }
    
    try {
      $query = $connect->prepare('SELECT id, usuario, senha, nome, email, sobrenome  FROM usuarios WHERE usuario = :usuario');
      $query->execute(array(
        ':usuario' => $_SESSION['usuario']
      ));
      $data = $query->fetch(PDO::FETCH_ASSOC);
      if($data == false) {
        $errMsg = "User $usuario not found.";
      }
      else {
        //echo $data['nome'];
        //echo "<br>";
        //echo $data['sobrenome'];
        //echo "<br>";
        //echo $data['usuario'];
        //echo "<br>";
        //echo $data['email'];
        //echo "<br>";
        //echo $data['senha'];
        //echo "<br>";
        
      }
    }
    catch(PDOException $e) {
      $errMsg = $e->getMessage();
    }
		
			
		
		?>


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
            <a class="nav-link" href="../logado.html">Revisar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../informacao.html">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="../sobre.html">Sobre</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../index.php"><font color="red"> Sair</font></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br><br><br>
		


<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progresso</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Perfil</h5>
   
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong> Nome: </strong> <br>
    <?php echo $data['nome'];?> </li>
    <li class="list-group-item"><strong>Sobrenome:</strong> <br>
    <?php echo $data['sobrenome'];?></li>
    <li class="list-group-item"><strong>Usuario:</strong><br>
    <?php echo $data['usuario'];?></li>
    <li class="list-group-item"><strong>E-mail:</strong><br>
    <?php echo $data['email'];?></li>
    <li class="list-group-item"><strong>Senha:</strong><br>
    <?php echo $data['senha'];?></li>
  </ul>
  
  <div class="card-body">
  <!-- ?id=<?php echo $data['id'];?> -->
    <a href="edit_usuario.php" class="btn btn-info active" name='alterar' role="button" aria-pressed="true">Alterar</a>
  </div>
  
</div>


<br><br><br>

 
		<!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Abrindo portas &copy; Criado em 2019</p>
    </div>

    <!-- /.container -->
  </footer>
	</body>
</html>
