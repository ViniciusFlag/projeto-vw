<?php
    require_once('../app/model/Usuario.php');
    $u = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{BASE}}vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="{{BASE}}css/style.css" />

    <title>
      {%block title%}{%endblock%}
    </title>
</head>
<body class="body">
    <div class="principal">
            <form method="POST">
                <h2>VW 100</h2>
                <input type="text" name="login" id="usuario" class="input" placeholder="Usuário">
                <input type="password" name="senha" id="senha" class="input" placeholder="Senha">
                <!-- <input type="submit" value="Entrar" class="input input-buttom"> -->
                <button type="button" class="input input-buttom" onclick="logar();">Logar</button>
            </form>
    </div>
</body>
</html>

<?php
// verificar se a pessoa clicou no botão
//verifica a existencia  
if(isset($_POST['usuario'])) {
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    //verificar se não esta vazio
    if(!empty($usuario) && !empty($senha)) {
        $u->connect('vw-projeto', 'localhost', 'root', '');
        if($u->msgErro == "") {
            if($u->logar($usuario, $senha))
            {
                header("location: http://localhost/vw-projeto/localizaRacks");
            } else {
                echo "Usuario ou Senha estão incorretos";
            }
        } else {
            echo "erro" . $u->msgErro;
        }
        
    } else {
        echo "preeche todos os campos";
    }
}
?>
<script>
    function logar() {
        window.location = 'http://localhost/vw-projeto/localizaRacks';
    }
</script>
