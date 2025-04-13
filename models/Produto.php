<?php
class Produto {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function criarProduto($descricao, $preco, $quantidade, $codigo_barras, $cod_interno) {
        $query = "INSERT INTO produtos (descricao, preco, quantidade, codigo_barras, cod_interno) VALUES (:descricao, :preco, :quantidade, :codigo_barras, :cod_interno)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":descricao", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":quantidade", $quantidade);
        $stmt->bindParam(":quantidade", $codigo_barras);
        $stmt->bindParam(":quantidade", $cod_interno);
        return $stmt->execute();
    }

    public function listarProdutos() {
        $query = "SELECT * FROM produtos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>