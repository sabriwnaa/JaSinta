<?php

$id_foto = $_GET['id'];

$db = new mysqli("localhost", "root", "", "jasinta");

$checkQuery = "SELECT * FROM foto WHERE id = ?";
$checkStmt = $db->prepare($checkQuery);
$checkStmt->bind_param("i", $id_foto);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

$deleteQuery = "DELETE FROM foto WHERE id = ?";
$deleteStmt = $db->prepare($deleteQuery);
$deleteStmt->bind_param("i", $id_foto);
$deleteStmt->execute();

$deleteStmt->close();
$checkStmt->close();
$db->close();

header("Location: fotos.php");
exit;
?>