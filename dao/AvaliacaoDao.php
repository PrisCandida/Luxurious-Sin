<?php 

// Criação da classe Usuario com o CRUD

class AvaliacaoDao {

    public function criarA(Avaliacao $avaliacao) {
        try {

            $sql = "INSERT INTO cliente (nome_cliente, cpf, email, sexo, senha) VALUES (:nome, :cpf, :email, :sexo, :senha)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $avaliacao->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $avaliacao->getCPF(), PDO::PARAM_STR);
            $stmt->bindValue(":email", $avaliacao->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(":sexo", $avaliacao->getSexo(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $avaliacao->getSenha(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir cliente <br>" . $e->getMessage() . '<br>';
        }
    }

    public function listarA() {
        try {
            $sql = "SELECT feedback WHERE id_produto = :id_produto";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaAvaliacao($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }


     
    private function listaAvaliacao($linhas) {

        $avaliacao = new Avaliacao();
        $avaliacao->setIDCliente($linhas['id_cliente']);
        $avaliacao->setIDProduto($linhas['id_produto']);
        $avaliacao->setEstrelas($linhas['estrelas']);
        $avaliacao->setDescricao($linhas['descricao']);
        
        return $avaliacao;
    }



}

?>