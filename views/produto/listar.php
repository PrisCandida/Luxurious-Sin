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

if(!$login->checkLogin() || $id != 1) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Listar Usuários </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style> 
            img {
                width: 100px;
                height: 80px;
            }
        </style>
        <script>

            function deletar() {
                ok = confirm("Tem certeza que deseja deletar estes dados??");
                if(ok){
                    return true;
                } else {
                    return false;
                }
            }

        </script>
    </head>
    <body>
        <h2> Listar Produtos - <a href="../../"> voltar </a> </h2>

        <table border="1" style="border:4px solid #09A; width:800px;">
            <tr style="background-color:#7FF;">
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Imagem</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php foreach ($produtodao->listarp() as $produto) : ?>
            <tr>
                <td><?= $produto->getID() ?></td>
                <td><?= $produto->getNome() ?></td>
                <td><?= $produto->getValor() ?></td>
                <td><?= $produto->getMarca() ?></td>
                <td> <img src="../../img/<?= $produto->getImagem()?>" alt="<?= $produto->getImagem()?>"/></td>
                <td style="text-align:center;">
                    <form action="../../controller/ProdutoController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $produto->getID() ?>"/>
                        <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImagem() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="EXCLUIR" style="margin-bottom:-15px; background-color:#E23;" onclick="return deletar()"/>
                    </form>
                </td>
                <td style="text-align:center;"> 
                    <form action="../produto/alterar.php" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $produto->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="EDITAR" style="margin-bottom:-15px; background-color:#2E3;"/>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>