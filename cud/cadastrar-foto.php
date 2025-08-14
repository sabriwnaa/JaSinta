<?php
require_once '../modulos/foto-modulo.php';

// Se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_FILES['fotos']['tmp_name'] as $index => $tmpName) {
        if (!empty($tmpName) && is_uploaded_file($tmpName)) {
            $nomeArquivo = uniqid() . "_" . basename($_FILES['fotos']['name'][$index]);
            $caminhoBanco = "img/" . $nomeArquivo;
            move_uploaded_file($tmpName, __DIR__ . "/../img/" . $nomeArquivo);
            adicionarFoto($caminhoBanco, $descricao, $idCategoria, null);

            if (move_uploaded_file($tmpName, $destino)) {
                $descricao = $_POST['descricao'][$index] ?? '';
                $idCategoria = $_POST['categoria'][$index] ?? null;
                adicionarFoto($destino, $descricao, $idCategoria, null);
            }
        }
    }
    header("Location: ../fotos.php");
    exit;
}

$categorias = listarCategorias();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Foto</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <?php include('../includes/header.php'); ?>
    <div class="main">
        <h1>Cadastrar Foto</h1>
        <form method="POST" enctype="multipart/form-data">
            <div id="fotos-container">
                <div class="foto-item">
                    <input type="file" name="fotos[]" accept="image/*" required>
                    <input type="text" name="descricao[]" placeholder="Descrição">
                    <select name="categoria[]">
                        <option value="">Selecione uma categoria</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?= $cat['id']; ?>"><?= htmlspecialchars($cat['nome']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <button type="button" id="btn-adicionar-foto">Adicionar foto</button>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

<script>
document.getElementById('btn-adicionar-foto').addEventListener('click', function () {
    const container = document.getElementById('fotos-container');

    const novoItem = document.createElement('div');
    novoItem.classList.add('foto-item');
    novoItem.innerHTML = `
        <input type="file" name="fotos[]" accept="image/*" required>
        <input type="text" name="descricao[]" placeholder="Descrição">
        <select name="categoria[]">
            <option value="">Selecione uma categoria</option>
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat['id']; ?>"><?= htmlspecialchars($cat['nome']); ?></option>
            <?php endforeach; ?>
        </select>
    `;
    container.appendChild(novoItem);
});
</script>
</body>
</html>
