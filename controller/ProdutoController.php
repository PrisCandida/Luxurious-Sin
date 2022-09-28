<?php 

require_once('../config/Conexao.php');
require_once('../dao/ProdutoDao.php');
require_once('../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $produto->setNome($dados['nome']);
    $produto->setValor($dados['valor']);
    $produto->setMarca($dados['marca']);
    $produto->setImagem($_FILES['imagem']);

    if($produtodao->criar($produto)) {

    echo "<script>
            alert('Produto Cadastrado com Sucesso!!');
            location.href = '../';
          </script>";
    }

} else if(isset($_POST['excluir'])) {

  $produto->setID($_POST['id_del']);
  $img = $_POST['del_img'];

  if($produtodao->excluir($produto)) {
    
    $del_img = "../img/$img";
    unlink($del_img);

  echo "<script>
          alert('Produto Deletado com Sucesso!!');
          location.href = '../views/produto/listar.php';
      </script>";
  }

}else if(isset($_POST['alterar'])){

  $produto->setID($dados['id_alter']);
  $produto->setNome($dados['nome']);
  $produto->setPreco($dados['valor']);
  $produto->setMarca($dados['marca']);
  $produto->setImg($_FILES['imagem']);

  $img = $_POST['del_img'];

  if($produtodao->alterar($produto)) {

    $del_img = "../img/$img";
    unlink($del_img);

      if(!is_file($del_img)){  
          echo "<script>
                  alert('Produto Atualizado com Sucesso!!');
                  location.href = '../views/produto/listar_admin.php';
              </script>";
      }
  }
} 

?>