<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/ProdutoDao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();

$login = new UserDao();

$id = $_SESSION['user_session'];

if(!$login->checkLogin()|| $id != 1) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Alterar Produto </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script type="text/javascript">
   	
        var mostrarImg = function(event) {
            var ler = new FileReader();
            ler.onload = function(){
                var mostrar = document.getElementById('mostrar');
                mostrar.src = ler.result;
            }
        ler.readAsDataURL(event.target.files[0]);
        }
        
    </script>
 
    <style type="text/css">
        
         #mostrar {
             width: 140px;
             height: 120px;
             margin: 10px;
             border: 1px dashed #CCC;
         }
 
    </style>
</head>
<body>
    
    <h2> Alterar Produto </h2>

    <fieldset style="border:3px solid #098; width:600px;">
        <legend style="font-weight: bolder; font-size: 18px;"> Informe os dados do produto </legend>

        <?php foreach ($produtodao->editar() as $produto) : ?>
           
            <form action="../../controller/ProdutoController.php" method="post" enctype="multipart/form-data" name="edit">
                <label> Nome: </label>
                <input type="hidden" id="id_alter" name="id_alter" value="<?= $produto->getID() ?>" />
                <input type="text" id="nome" name="nome" value="<?= $produto->getNome() ?>" required />
                <br/> <br/>
                <label> Preço: </label>
                <input type="text" id="valor" name="valor" value="<?= $produto->getValor() ?>" required />
                <br/> <br/>
                <label> Marca: </label>
                <input type="text" id="marca" name="marca" value="<?= $produto->getMarca() ?>" required />
                <br/> <br/>
                <label> Imagem: </label> <br/>
                <img id="mostrar" alt=""> <br/>
                <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImagem() ?>"/>
                <input type="file" name="img" id="img" required onchange="mostrarImg(event)">
                <br/> <br/>
                <input type="submit" id="alterar" name="alterar" value="ALTERAR" />
                <button> <a href="./listar.php" style="text-decoration:none;"> VOLTAR </a> </button>
            </form>
        <?php endforeach ?>
    </fieldset>

</body>
</html>