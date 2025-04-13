<?php include '../views/layouts/header.php'; ?>
<h1>Cadastrar Novo Produto</h1>
<form method="POST" action="?controller=produto&action=criarProduto">
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" required>
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço (R$)</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
    </div>
    <div class="mb-3">
        <label for="codigo_barras" class="form-label">Código de Barras</label>
        <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" required>
    </div>
    <div class="mb-3">
        <label for="cod_interno" class="form-label">Código Interno</label>
        <input type="text" class="form-control" id="cod_interno" name="cod_interno" required>
    </div>
    <button type="submit" class="btn btn-green">Cadastrar</button>
</form>
<?php include '../views/layouts/footer.php'; ?>