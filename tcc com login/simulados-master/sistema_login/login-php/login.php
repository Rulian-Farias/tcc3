<?php
  require('../../conexao.php');

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	  header('Location: entrar.php');
	  exit();
  }

  if($errMsg == '') {
    try {
      $query = $connect->prepare('SELECT id, usuario, senha  FROM usuarios WHERE usuario = :usuario');
      $query->execute(array(
        ':usuario' => $usuario
      ));
      $data = $query->fetch(PDO::FETCH_ASSOC);
      if($data == false) {
        $errMsg = "User $usuario not found.";
      }
      else {
        if($senha == $data['senha']) {
          $_SESSION['usuario'] = $data['usuario'];
          $_SESSION['senha'] = $data['senha'];
          header('Location: ../../logado.html');
          exit;
        }
        else
          $errMsg = 'Password not match.';
      }
    }
    catch(PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
?>

 <center> 
 	<img src="erro.png">ERRO NO BANCO DE DADOS
 </center>


  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


