<?php
// Início da sessão (se necessário para autenticação futura)
session_start();

// Configuração básica
require_once 'config/database.php';

// Roteamento básico (se necessário redirecionar para uma página padrão)
if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    // Redireciona para a lista de produtos como página inicial
    header("Location: index.php?controller=produto&action=index");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAYON - PDV Comércio de Roupas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Font Awesome para ícones (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="public/img/logo.png" alt="ZAYON Logo" class="logo">
            <h4 class="text-white mt-2">ZAYON</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="produtosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-box"></i> Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="produtosDropdown">
                    <li><a class="dropdown-item" href="?controller=produto&action=index">Listar Produtos</a></li>
                    <li><a class="dropdown-item" href="?controller=produto&action=criarProduto">Cadastrar Produto</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=estoque&action=index">
                    <i class="fas fa-warehouse"></i> Estoque
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=venda&action=index">
                    <i class="fas fa-cash-register"></i> Vendas
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <nav class="navbar navbar-light bg-light">
            <button class="btn btn-green toggle-sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <span class="navbar-text ms-auto">Bem-vindo ao ZAYON - PDV</span>
        </nav>
        <div class="container mt-4">
            <h1>Bem-vindo ao Sistema ZAYON</h1>
            <p>Gerencie seus produtos, estoque e vendas de forma eficiente com o ZAYON - PDV Comércio de Roupas.</p>
            <!-- Placeholder para conteúdo dinâmico futuro -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="public/js/script.js"></script>
</body>
</html>