<?php
require_once '../models/Produto.php';

class ProdutoController {
    private $produto;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->produto = new Produto($db);
    }

    public function index() {
        $produtos = $this->produto->listarProdutos();
        require_once '../views/produtos/produto.php';
    }

    public function criarProduto() {
        if ($_POST) {
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            $codigo_barras = $_POST['codigo_barras'];
            $cod_interno = $_POST['cod_interno'];
            if ($this->produto->cadastrarProduto($descricao, $preco, $quantidade, $codigo_barras, $cod_interno)) {
                header("Location: index.php?controller=produto&action=index");
            }
        }
        require_once '../views/produtos/cadastrarProduto.php';
    }
}
?>