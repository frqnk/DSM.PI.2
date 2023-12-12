<?php
require_once '../banco_de_dados.php';
$con = (new DBConnect())->getConn();

$stmt = $con->prepare('DELETE FROM artigo WHERE id = ?');

$stmt->execute([
    $_GET['artigo_id']
]);

header('Location: list.php');
