<?php
define('HOST', 'localhost');
define('USUARIO', 'aluno');
define('SENHA', 'aluno');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');