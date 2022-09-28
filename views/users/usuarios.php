<style type="text/css">

* {
    margin: 0;
    padding: 0;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
}

.logo {
    width: 120px; 
    background-image: url(img/Logotipo\ de\ moda\ feminino\ elegante\ branco.png);
    height: 120px;
    background-size: 120px 120px;
    background-repeat: no-repeat;

}

header {
    width: 100%;
    height: 125px;
    border: 2px solid #000000;
    /* border-radius: 5px; */
    box-shadow: 4px 5px 6px rgba(10, 12, 11, 0.6);
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    background-color: #000000;
    background-image: url(views/home/img/img/Logotipo\ de\ moda\ feminino\ elegante\ branco.png);
}


header>ul {
    min-width: 50%;
    height: 100%;
    display: flex;
    justify-content: end;
    align-items: center;
    background-color: black;
    /* margin-left: 170px; */
    color:white;
}

header>ul>li {
    font-size: 18px;
    list-style-type: none;
    padding: 0;
    margin: 0 15px;
    float: left;
    /* margin-left: 30px; */
    background-color: black;
}

header>ul>li>a:hover {
    color: rgb(255, 0, 0);
    box-shadow: 1px 1px 1px 1px rgba(255, 0, 0, 0.6);
    border-radius: 1px;
    transition: all, 0.5s;
}

header>ul>li>a {
    color: white;
    font-weight: bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 15px;
    line-height: 100px;
    background-color:black;
}

#nome{
    margin-top: 50px;
    margin-left: 125px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

#nome2{
    margin-top: 1500px;
    margin-left: 125px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

#table1{
    float: left;
    margin-left: 350px;
    margin-top: -90px;
}

#table2{
    float: left;
    margin-left: 350px;
    margin-top: -200px;
}


</style>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXURIOUS SIN</title>
    <link rel="stylesheet" href="style.css">
</head>


<body link="black" alink="black" vlink="black">

    <header >
        <div></div>
        
        <ul>
            <li> <a href="index.html"> HOME </a> </li>
            <li> <a href="../sobre/suporte.html"> SOBRE </a> </li>
            <li> <a href="../avaliação/feedback.html"> AVALIAÇÃO </a> </li>
            <li> <a href="../views/listar/index.php"> USUÁRIO </a> </li>
            <li> <a href="./controller/UsuarioController.php?logout=true"> LOGOUT </a> </li>
            <li><form action="views/alterar/index.php" method="post" name="edit">
                            <input type="hidden" id="id_edit" name="id_edit" value="' . $usuario->getID() . '"/>
                            <button type="submit" style="background-color:#FFF; text-decoration:underline; border:none; cursor:pointer;"/> Alterar Cadastro </button>
                        </form></li>
        </ul>
    </header>

    <?php 
echo '<h4> <br/> Bem vindo, ' . $usuario->getNome() . '. </h4>      ';
?><br/><br/>



    <main>

        <h2 id="nome"> CHANEL </h2>

        <table width="900" height="900" id="table1">
            <tr>
                <td>
                    <img src="views/home/Produtos/Chanel/brincos/img/Brinco Individual Coco Crush (Brinco matelassê, Ouro amarelo).webp"
                        width="250" height="250">
                    <p>Brinco Individual Coco Crush</p>
                    <p> Brinco matelassê, Ouro beige, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/brincos/img/Brincos Coco Crush (Brincos matelassê, Ouro beige).webp"
                        width="250" height="250">
                    <p> Brincos Coco Crush </p>
                    <p> Ouro branco, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/brincos/img/Brinco Individual Coco Crush (Brinco matelassê, Ouro beige, diamantes).webp"
                        width="250" height="250">
                    <p>Brinco Individual Coco Crush</p>
                    <p> Ouro branco, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="views/home/Produtos/Chanel/colares/img/Colar Coco Crush.webp" width="250" height="250">
                    <p> Colar Eternal </p>
                    <p> Ouro branco, diamante </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/colares/img/Colar Comète Géode.webp" width="250" height="250">
                    <p> Colar Extrait de Camélia </p>
                    <p> Ouro rosa, diamante </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/colares/img/Les Infinis de Camélia.webp" width="250" height="250">
                    <p> Les Infinis de Comète </p>
                    <p> Ouro branco, diamante </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="views/home/Produtos/Chanel/maquiagem/img/Cc Cream (Creme de pele.webp" width="250" height="250">
                    <p> Cc Cream </p>
                    <p>Creme de pele(branco)</p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/maquiagem/img/Baume Essentiel (bastão iluminador.webp" width="250"
                        height="250">
                    <p> Baume Essentiel </p>
                    <p> bastão iluminador(transparente,dourado,rose)</p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/maquiagem/img/Le Vernis (Esmalte longa duração.webp" width="250"
                        height="250">
                    <p>Le Vernis </p>
                    <p>Esmalte longa duração (rosa, vermelho,azul) </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="views/home/Produtos/Chanel/perfumes/feminino/img/Coco Mademoiselle (Eau de Parfum Spray).webp"
                        width="250" height="250">
                    <p> Coco Mademoiselle </p>
                    <p> Eau de Parfum Spray </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/perfumes/feminino/img/Coco Mademoiselle (Eau de parfum Twist and Spray).webp"
                        width="250" height="250">
                    <p> Coco Mademoiselle </p>
                    <p> Eau de parfum Twist and Spray </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Chanel/perfumes/feminino/img/N°5 (Eau de Parfum vaporizador).webp" width="250"
                        height="250">
                    <p> N°5 </p>
                    <p>Eau de Parfum Vaporizador </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
        </table>
        <br />

        <h2 id="nome2"> CARTIER </h2>
        <table width="900" height="900" id="table2" cellspacing="10">
            <tr>
                <td>
                    <img src="views/home/Produtos/Cartier/Anel/Img/Aliança Ballerine (Platina, diamantes).png" width="250"
                        height="250">
                    <p> Aliança Ballerine </p>
                    <p> Platina, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Anel/Img/Aliança Maillon Panthere (Ouro amarelo, diamantes).webp"
                        width="250" height="250">
                    <p> Aliança Maillon Panthere </p>
                    <p> Ouro amarelo, diamantes </p>
                    <a href=""> Ler as Avaliações </a>

                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Anel/Img/Anel Pluie de Cartier (Ouro branco, diamantes).webp" width="195"
                        height="195"><br /><br /><br />
                    <p> Anel Pluie de Cartier </p>
                    <p> Ouro branco, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <br /> <br /><br /><br /><br /><br />
            <tr>
                <td>
                    <img src="views/home/Produtos/Cartier/Relogios/Femin/img/Relógio Ballon Bleu de Cartier (33 mm aço, diamantes).png"
                        width="250" height="250">
                    <p> Relógio Ballon Bleu de Cartier </p>
                    <p> 33 mm aço, diamantes </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Relogios/Mascu/img/Relógio Tank Louis Cartier (Modelo grande, movimento mecânico, ouro rosa 18K, couro).png"
                        width="250" height="250">
                    <p> Relógio Tank Louis Cartier </p>
                    <p> Modelo grande, movimento mecânico,<br />
                        ouro rosa 18K, couro </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Relogios/Femin/img/Relógio Santos-Dumont (Modelo grande, aço,couro).webp"
                        width="250" height="250">
                    <p> Relógio Santos-Dumont </p>
                    <p> Modelo grande, aço,couro </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <br /> <br /><br />

            <tr>
                <td>
                    <img src="views/home/Produtos/Cartier/Bolsas/Femin/img/Bolsa com Corrente Modelo mini, Duplo C de Cartier (Couro de bezerro na cor hortelã, acabamento dourado).png"
                        width="220" height="220">
                    <p> Bolsa com Corrente Modelo mini
                    </p>
                    <p> Couro de bezerro na cor hortelã,<br />
                        acabamento dourado </p>
                    <a href=""> Ler as Avaliações </a>
                </td>

                <td>
                    <img src="views/home/Produtos/Cartier/Bolsas/Femin/img/Bolsa Guirlande de Cartier, modelo mini (Couro de bezerro na cor preta, acabamento em paládio).png"
                        width="200" height="200">
                    <p> Bolsa Guirlande de Cartier </p>
                    <p> Couro de bezerro na cor preta,<br />
                        acabamento em paládio </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Bolsas/Femin/img/Clutch Panthêre de Cartier (Couro de bezerro preto, acabamento dourado).png"
                        width="200" height="200">
                    <p> Clutch Panthêre de Cartier </p>
                    <p> Couro de bezerro preto, acabamento dourado </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="views/home/Produtos/Cartier/Perfumes/img/La Panthére Eau de Parfum.webp" width="200" height="200">
                    <p> La Panthére Eau de Parfum </p>
                    <p> Spray </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Perfumes/img/Riviéres de Cartier Insouciance 100 ml.png" width="200"
                        height="200">
                    <p> Riviéres de Cartier Insouciance 100 ml </p>
                    <p> Spray </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Cartier/Perfumes/img/Riviéres de Cartier Luxuriance 100 ml.png" width="200"
                        height="200">
                    <p> Riviéres de Cartier Luxuriance 100 ml </p>
                    <p> Spray </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
        </table>
        <h2 id="nome2">Louis Vuitton </h2>
        <table width="900" height="900" id="table2" cellspacing="10">
           
            <br/>
            <tr>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/sapatos/img/Ankle Boot Plataforma Fame.png"  width="250" height="250">
                    <p> Ankle Boot Plataforma Fame </p>
                    <p>cor disponível: preto</p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/sapatos/img/Sandália Call Back.png"  width="250" height="250">
                    <p> Sandália Call Back  </p>
                    <p> cor disponível: branco </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/sapatos/img/Sneaker Time Out.png"  width="250" height="250">
                    <p> Sneaker Time Out   </p>
                    <p>cor disponível: branco </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/relogio/masculino/img/Relógio Tambour Street Diver.png"  width="250" height="250">
                    <p> Relógio Tambour Street Diver </p>
                    <p>cor disponível : prata com azul </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/relogio/masculino/img/Tambour Slim Monogram Eclipse 39.png"  width="250" height="250">
                    <p>Tambour Slim Time Zone 35 </p>
                    <p>cor disponível: preto </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/relogio/masculino/img/Relógio Tambour Moon Dual Time Silver 44 Mm.png"  width="250" height="250">
                    <p>Relógio Tambour Moon Dual Time Silver 44 Mm </p>
                    <p>cor disponível: branco com prata </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                </tr>
                <tr>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/bolsa/feminina/img/Bolsa Alma bb.png"  width="250" height="250">
                    <p>Bolsa Alma bb </p>
                    <p>cor disponível: verde água, preto, amarelo, lilás</p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/bolsa/feminina/img/Bolsa Over the Moon.png"  width="250" height="250">
                    <p>Bolsa Over the Moon </p>
                    <p>cor disponível: lilás, verde água, preto, rosa, branco, azul claro </p>
                    <a href=""> Ler as Avaliações </a>
                </td>
                <td>
                    <img src="views/home/Produtos/Louis Vuitton/bolsa/feminina/img/Bolsa Marceau.png"  width="250" height="250">
                    <p>Bolsa Marceau </p>
                    <p>cor disponível: preto, bege,branco</p>
                    <a href=""> Ler as Avaliações </a>
                </td>
               
            </tr>

        </table>


    </main>
    <footer>

    </footer>

</body>
</div>


</html>
