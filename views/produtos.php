<?php include '../views/layouts/header.php'; ?>
<h1>Lista de Produtos</h1>
<a href="?controller=produto&action=criarProduto" class="btn btn-green mb-3">Novo Produto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Código de Barras</th>
            <th>Código Interno</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto['id']; ?></td>
                <td><?php echo $produto['descricao']; ?></td>
                <td><?php echo "R$ " . number_format($produto['preco'], 2, ',', '.'); ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
                <td><?php echo $produto['codigo_barras']; ?></td>
                <td><?php echo $produto['cod_interno']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include '../views/layouts/footer.php'; ?>