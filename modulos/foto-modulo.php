<?php
require_once __DIR__ . '/db.php';

/**
 * Adiciona uma nova foto no banco
 * @param string $caminho Caminho do arquivo salvo
 * @param string $descricao Texto descritivo
 * @param int|null $idCategoria ID da categoria (opcional)
 * @param int|null $idUsuario ID do usuário (opcional)
 * @return bool
 */
function adicionarFoto($caminho, $descricao, $idCategoria = null, $idUsuario = null) {
    global $conn;

    // Inserir a foto na tabela 'foto'
    $sql = "INSERT INTO foto (imagem, jogadora) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $caminho, $idUsuario);
    
    if (!$stmt->execute()) {
        return false;
    }

    // Pegar o ID da foto recém-inserida
    $idFoto = $conn->insert_id;

    // Se houver categoria, inserir na tabela de relação
    if (!empty($idCategoria)) {
        $sqlRel = "INSERT INTO foto_categoria (id_foto, id_categoria) VALUES (?, ?)";
        $stmtRel = $conn->prepare($sqlRel);
        $stmtRel->bind_param("ii", $idFoto, $idCategoria);
        if (!$stmtRel->execute()) {
            return false;
        }
    }

    return true;
}





/**
 * Consulta fotos com filtro
 */
function consultarFotos($tipoFiltro = 'todos', $valor = null) {
    global $conn;

    $sql = "SELECT f.* FROM foto f";
    $params = [];
    $types = "";

    if ($tipoFiltro === 'categoria') {
        $sql .= " 
            INNER JOIN foto_categoria fc ON f.id = fc.id_foto
            WHERE fc.id_categoria = ?";
        $params[] = $valor;
        $types .= "i";
    }
    elseif ($tipoFiltro === 'jogadora') {
        $sql .= " WHERE f.jogadora = ?";
        $params[] = $valor;
        $types .= "i";
    }

    $stmt = $conn->prepare($sql);

    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

/**
 * Retorna todas as categorias
 */
function listarCategorias() {
    global $conn;
    $sql = "SELECT id, nome FROM categoria";
    $res = $conn->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}

/**
 * Retorna todas as jogadoras que têm fotos
 */
function listarJogadorasComFotos() {
    global $conn;
    $sql = "
        SELECT DISTINCT j.id, j.nome
        FROM jogadora j
        INNER JOIN foto f ON j.id = f.jogadora
    ";
    $res = $conn->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}

function consultarUltimasTresFotos() {
    global $conn;
    $sql = "SELECT * FROM foto ORDER BY data_cadastro DESC LIMIT 3";
    $res = $conn->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}
