<?php

class Usuario
{
  private $pdo;
  public $msgErro = ""; 

  public function connect($nomeDB, $host, $usuarioDB, $senha)
  {
    global $pdo;
    global $msgErro;

    try {
      $pdo = new PDO("mysql:dbname" . $nomeDB.";host=".$host,$usuarioDB, $senha);
    } catch(PDOException $e) {
      $msgErro = $e->getMessage();
    }

  }

  public function cadastrar($nome, $telefone, $usuario, $senha)
  {
    global $pdo;
  }

  public function logar($usuario, $senha)
  {
    global $pdo;
    //verificar se o usuario e senha estão cadastrado
    $sql = $pdo->prepare("SELECT usu_codigo FROM usuario WHERE usu_usuario = :usuario AND usu_senha = :senha");

    $sql->bindValue(":usuario", $usuario);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0) {
      $dado = $sql->fetch();
      session_start();
      $_SESSION['usu_codigo'] = $dado['usu_codigo'];

      return true; //logado com sucesso
    } else {
      return false; //não foi possivel logar
    }
  }
}

?>