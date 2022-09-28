<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');

//instancia as classes
$usuario = new Usuario();
$userdao = new UserDao();

$login = new UserDao();

if(!$login->checkLogin()) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Alterar Usuário </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
    <h2> Alterar Usuário </h2>

    <fieldset style="border:3px solid #098; width:700px;">
        <legend style="font-weight: bolder; font-size: 18px;"> Alterar dados </legend>

        <?php foreach ($userdao->editar() as $usuario) : ?>

            <form action="../../controller/UsuarioController.php" method="post" name="cad">
                <label> Nome: </label>
                <input type="hidden" id="id_alter" name="id_alter" value="<?= $usuario->getID() ?>" />
                <input type="text" id="nome" name="nome" value="<?= $usuario->getNome() ?>" required />
                <br/> <br/>
                <label> CPF: </label>
                <input type="text" id="cpf" name="cpf" value="<?= $usuario->getCPF() ?>" required />
                <br/> <br/>
                <label> E-mail: </label>
                <input type="email" id="mail" name="mail" value="<?= $usuario->getEmail()?>"  required />
                <br/> <br/>
                <label> Telefone: </label>
                <input type="tel" id="telefone" name="telefone" value="<?= $usuario->getTelefone()?>"  required />
                <br/> <br/>
                <label> Sexo: </label>
                <select id="sexo" name="sexo">
                    <option value="">--Selecione--</option>
                    <option value="M" <?php echo $usuario->getSexo() == "M" ? "selected" : ""?>> Masculino </option>
                    <option value="F" <?php echo $usuario->getSexo() == "F" ? "selected" : ""?>> Feminino </option>
                    <option value="O" <?php echo $usuario->getSexo() == "O" ? "selected" : ""?>> Outro </option>
                </select>
                <br/> <br/>
                <label> Nova Senha: </label>
                <input type="password" id="senha" name="senha" required />
                <br/> <br/>
                <input type="submit" id="alterar" name="alterar" value="Alterar Cadastro" />
                <button> <a href="../listar/" style="text-decoration:none;"> VOLTAR </a> </button>
        </form>
        <?php endforeach ?>
       
    </fieldset>

</body>
</html>