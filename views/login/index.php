<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');

$login = new UserDao();

if($login->checkLogin()) {
	header("Location: ../../");
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Login </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body link="#000" alink="#000" vlink="#000">
    
    <h2> Login </h2>

    <fieldset>
    <p id="logo"></p>
            <form action="../../controller/UsuarioController.php" method="post" name="entrar">
                <label> E-mail: </label>
                <input type="email" id="mail" name="mail" required />
                <br/> <br/>
                <label> Senha: </label>
                <input type="password" id="senha" name="senha" required />
                <br/> <br/>
                <input type="submit" id="login" name="login" value="ENTRAR" />
                <button> <a href="../cadastro/" style="text-decoration: none;"> CADASTRAR </a> </button>
        </form>
    </fieldset>

</body>
</html>