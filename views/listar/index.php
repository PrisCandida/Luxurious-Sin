<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');

//instancia as classes
$usuario = new Usuario();
$userdao = new UserDao();

$login = new UserDao();

$id = $_SESSION['user_session'];

if(!$login->checkLogin() || $id != 1) {
    header("Location: ../login");
}

?>

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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Listar Usuários </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h2> Listar Usuários - <a href="views/users/usuarios.php"> voltar </a> </h2>

        <table border="1" style="border:4px solid #09A; width:800px;">
            <tr style="background-color:#391;">
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Sexo</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php foreach ($userdao->listar() as $usuario) : ?>
            <tr>
                <td><?= $usuario->getID() ?></td>
                <td><?= $usuario->getNome() ?></td>
                <td><?= $usuario->getCPF() ?></td>
                <td><?= $usuario->getEmail() ?></td>
                <td><?= $usuario->getSexo()?></td>
                <td style="text-align:center;">
                    <form action="../../controller/UsuarioController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $usuario->getID() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="EXCLUIR" style="margin-bottom:-15px; background-color:#E23;" onclick="return deletar()"/>
                    </form>
                </td>
                <td style="text-align:center;"> 
                    <form action="../alterar/" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $usuario->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="EDITAR" style="margin-bottom:-15px; background-color:#2E3;"/>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>