Simulados de ENEM e vestibular / cursos.
Equipe:
Rulian
Gabriel
Sabrina
Primeiro colocar o conteudo do arquivo dump.sql no localhostphpmyadmin:
CREATE DATABASE login; USE login;
CREATE TABLE login.usuario ( usuario_id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(200) NOT NULL, senha VARCHAR(32) NOT NULL, PRIMARY KEY (usuario_id));
INSERT INTO usuario (usuario_id,usuario,senha) VALUES (1,'gabriel','1234'); INSERT INTO usuario(usuario_id,usuario,senha) VALUES (2,'rulian','1234'); INSERT INTO usuario (usuario_id,usuario,senha) VALUES (3,'sabrina','1234');
Essa é a conexão dos nossos computadores: define('HOST', 'localhost'); define('USUARIO', 'aluno'); define('SENHA', 'aluno'); define('DB', 'login'); deve mudar alguma informação caso necessario
depois de tudo vai estar funcionando teoricamente,você tera que colocar usuario e senha, que está presente no dump.sql

