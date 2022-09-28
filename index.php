<?php 
    session_start();

    require_once('./config/Conexao.php');
    require_once('./dao/UserDao.php');
    require_once('./model/Usuario.php');

    //instancia as classes
    $usuario = new Usuario();
    $userdao = new UserDao();

    $login = new UserDao();

    if(!$login->checkLogin()) {
        header("Location: views/login");
    }

   foreach($userdao->user() as $usuario) {

    if($usuario->getID() == 1 && $usuario->getNome() == "Admin") {
        include 'views/users/admin.php';
    } else {
        include 'views/users/usuarios.php';
    }

   }
?>