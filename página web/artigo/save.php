<?php
require_once '../banco_de_dados.php';

$id = $_POST['id'] ?? '';
$nomeRedator = $_POST['nomeRedator'] ?? '';
$nomeArtigo = $_POST['nomeArtigo'] ?? '';
$dataPublicacao = $_POST['dataPublicacao'] ?? '';
$dataAlteracao = $_POST['dataAlteracao'] ?? '';
$FK_Administrador_ID = $_POST['FK_Administrador_ID'] ?? '';
$con = (new DBConnect())->getConn();

if ($id) {
    try {
        $stmt = $con->prepare('UPDATE artigo SET
            nomeRedator = ?,
            nomeArtigo = ?,
            dataPublicacao = ?,
            dataAlteracao = ?,
            FK_Administrador_ID = ?
        WHERE id = ?');
        $stmt->execute([
            $nomeRedator,
            $nomeArtigo,
            $dataPublicacao,
            $dataAlteracao,
            $FK_Administrador_ID,
            $id
        ]);
        header(
        'Location: list.php?msg=' . urlencode('Atualizado com sucesso'));
    } catch (\Throwable $th) {
        header('Location: form.php?artigo_id='. $_GET['artigo_id'].'&error=' . urlencode('Erro ao atualizar artigo: '.$th->getMessage()));
    }
}else{
    try {
        $stmt = $con->prepare('INSERT INTO artigo (
            nomeRedator,
            nomeArtigo,
            dataPublicacao,
            dataAlteracao,
            FK_Administrador_ID
        ) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([
            $nomeRedator,
            $nomeArtigo,
            $dataPublicacao,
            $dataAlteracao,
            $FK_Administrador_ID
        ]);
        header('Location: list.php?msg=' . urlencode('Cadastrado com sucesso'));
    } catch (\Throwable $th) {
        header( 'Location: form.php?error=' . urlencode('Erro ao inserir artigo: ' . $th->getMessage()));
    }
}

