<?php
require_once "db.php";

/**
 * Retorna todas as fotos
 */
function consultarTodasFotos() {
    global $conn;
    $sql = "SELECT * FROM fotos";
    $res = $conn->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}

/**
 * Retorna fotos filtradas por categoria
 */
function consultarFotosPorCategoria($idCategoria) {
    global $conn;
    $sql = "SELECT * FROM fotos WHERE id_categoria = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idCategoria);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

/**
 * Retorna fotos cadastradas por um usuário específico
 */
function consultarFotosPorUsuario($idUsuario) {
    global $conn;
    $sql = "SELECT * FROM fotos WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

/**
 * Retorna as 3 últimas fotos cadastradas
 */
function consultarUltimasTresFotos() {
    global $conn;
    $sql = "SELECT * FROM fotos ORDER BY data_cadastro DESC LIMIT 3";
    $res = $conn->query($sql);
    return $res->fetch_all(MYSQLI_ASSOC);
}
?>
