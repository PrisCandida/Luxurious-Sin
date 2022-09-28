<?php 

require_once('../config/Conexao.php');
require_once('../dao/UserDao.php');
require_once('../model/Usuario.php');

//instancia as classes
$avaliacao = new Avaliacao();
$avaliacaodao = new AvaliacaoDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

if(isset($_POST['avaliacao'])){


$avaliacao->setNome($dados['nome']);
$avaliacao->setEmail($dados['mail']);
$avaliacao->setCPF($dados['cpf']);
$avaliacao->setSexo($dados['sexo']);
$avaliacao->setSenha($senha); 

if($avaliacaodao->criarA($avaliacao)) {
echo "<script>
        alert('Avaliação Cadastrada com Sucesso!!');
        location.href = '../';
      </script>";
}

}

?>