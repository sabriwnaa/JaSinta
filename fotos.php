<?php
require_once 'modulos/foto-modulo.php';

// Captura filtro
$filtro = $_GET['filtro'] ?? 'todos';
$valor = null;

if (strpos($filtro, 'categoria-') === 0) {
    $filtroTipo = 'categoria';
    $valor = intval(str_replace('categoria-', '', $filtro));
} elseif (strpos($filtro, 'jogadora-') === 0) {
    $filtroTipo = 'jogadora';
    $valor = intval(str_replace('jogadora-', '', $filtro));
} else {
    $filtroTipo = 'todos';
}

// Consulta dados pelo módulo
$fotos = consultarFotos($filtroTipo, $valor);
$categorias = listarCategorias();
$jogadoras = listarJogadorasComFotos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos</title>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <?php include('includes/header.php');?>
        <div class='main'>
            <div class='container-horizontal'>
                <h1>Fotos</h1>
                <div class='container-horizontal'>
                    <a href="">Categorizar</a>
                    <a href="cud/cadastrar-foto.php">Cadastrar</a>
                    <form method="GET" action="">
                        <label for="filtro">Filtrar por:</label>
                        <select name="filtro" id="filtro" onchange="this.form.submit()">
                            <option value="todos" <?= $filtro == 'todos' ? 'selected' : '' ?>>Todos</option>

                            <optgroup label="Por Categoria">
                                <?php foreach($categorias as $cat): ?>
                                    <option value="categoria-<?= $cat['id']; ?>" <?= $filtro == 'categoria-'.$cat['id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($cat['nome']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </optgroup>

                            <optgroup label="Por Jogadora">
                                <?php foreach($jogadoras as $j): ?>
                                    <option value="jogadora-<?= $j['id']; ?>" <?= $filtro == 'jogadora-'.$j['id'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($j['nome']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </form>

                </div>
            </div>
            
            <div class='container-pecas'>
                <?php if (empty($fotos)): ?>
                    <p class="texto">Nenhuma foto encontrada para esse filtro.</p>
                <?php else: ?>
                    <?php foreach ($fotos as $foto): ?>
                        <div class="peca">
                            <p><?= htmlspecialchars($foto['descricao'] ?? ('Foto #'.$foto['id'])) ?></p>
                            <?php if (!empty($foto['imagem'])): ?>
                                <img src="<?= htmlspecialchars($foto['imagem']) ?>" alt="">
                            <?php endif; ?>

                            <a href="cud/preferencia-foto.php?id=<?= (int)$foto['id'] ?>" class="corner top-right">Preferência</a>
                            <a href="cud/excluir-foto.php?id=<?= (int)$foto['id'] ?>" class="corner bottom-right">Delete</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
</body>
</html>