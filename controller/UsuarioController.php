<?php 

require_once('../config/Conexao.php');
require_once('../dao/UserDao.php');
require_once('../model/Usuario.php');

//instancia as classes
$usuario = new Usuario();
$userdao = new UserDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $senha = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $usuario->setNome($dados['nome']);
    $usuario->setEmail($dados['mail']);
    $usuario->setCPF($dados['cpf']);
    $usuario->setSexo($dados['sexo']);
    $usuario->setSenha($senha); 

    if($userdao->criar($usuario)) {
    echo "<script>
            alert('Usuário Cadastrado com Sucesso!!');
            location.href = '../';
          </script>";
    }

// se a requisição for alterar
} else if(isset($_POST['alterar'])){

    $usuario->setID($dados['id_alter']);
    $usuario->setNome($dados['nome']);
    $usuario->setCPF($dados['cpf']);
    $usuario->setEmail($dados['mail']);
    $usuario->setSexo($dados['sexo']);
    $usuario->setSenha(password_hash($dados['senha'], PASSWORD_DEFAULT)); 

    if($userdao->alterar($usuario)) {

    echo "<script>
            alert('Usuário Atualizado com Sucesso!!');
            location.href = '../views/listar/';
        </script>";
    }

// se a requisição for deletar
} else if(isset($_POST['excluir'])) {

    $usuario->setID($_POST['id_del']);

    if($userdao->excluir($usuario)) {

    echo "<script>
            alert('Usuário Deletado com Sucesso!!');
            location.href = '../views/listar/';
        </script>";
    }

// se a requisição for login        
} else if(isset($_POST['login'])) {

	$usuario->setEmail(strip_tags($dados['mail']));
	$usuario->setSenha(strip_tags($dados['senha'])); 

    $userdao->login($usuario);

	if($userdao->login($usuario)) {

     echo "<script>
            alert('Usuário logado com Sucesso!!');
            location.href = '../';
           </script>";

	} else {
        echo "<script>
                alert('Acesso inválido! login ou senha incorretos!');
                location.href = '../views/login/';
            </script>";
	}	

// se a requisição for logout      
} else if(isset($_GET['logout'])) {

    $userdao->logout();

    header("Location: ../views/login/");


} else {

    header("Location: ../");
}

?>