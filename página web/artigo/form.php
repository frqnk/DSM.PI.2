<?php
require_once '../banco_de_dados.php';
$con = (new DBConnect())->getConn();

$redatores = $con->prepare('SELECT * FROM redator')->fetchAll();
$administradores = $con->prepare('SELECT * FROM administradores')->fetchAll();

if (isset($_GET['artigo_id'])) {
    $stmt = $con->prepare('SELECT * FROM artigo WHERE id = ?');

    $stmt->execute([
        $_GET['artigo_id']
    ]);
    $artigo = $stmt->fetch();
} else {
    $artigo = [
        'ID' => '',
        'nomeRedator' => '',
        'nomeArtigo' => '',
        'dataPublicacao' => '',
        'dataAlteracao' => '',
    ];
}
?>
<a href="list.php">Listar</a>

<form action="save.php" method="post">
    <?php if (isset($_GET['error'])) : ?>
        <div class="bg-danger"><?= $_GET['error'] ?></div>
    <?php endif; ?>
    <input type="hidden" name="id" value="<?= $artigo['ID'] ?>">
    <label for="nomeRedator">
        <select name="nomeRedator" id="nomeRedator">
            <option value="">Selecione um redator</option>
            <?php foreach ($redatores as $redator) : ?>
                <option value="<?= $redator['nome'] ?>"><?= $redator['nome'] ?></option>
            <?php endforeach ?>
        </select>
    </label>
    <label for="FK_Administrador_ID">
        <select name="FK_Administrador_ID" id="FK_Administrador_ID">
            <option value="">Selecione um administrador</option>
            <?php foreach ($administradores as $administrador) : ?>
                <option value="<?= $administrador['nome'] ?>"><?= $administrador['nome'] ?></option>
            <?php endforeach ?>
        </select>
    </label>
    <label for="nomeArtigo">
        <input type="text" name="nomeArtigo" value="<?= $artigo['nomeArtigo'] ?>">
    </label>
    <label for="dataPublicacao">
        <input type="date" name="dataPublicacao" value="<?= $artigo['dataPublicacao'] ?>">
    </label>
    <label for="dataAlteracao">
        <input readonly type="date" name="dataAlteracao" value="<?= $artigo['dataAlteracao'] ?>">
    </label>
    <button type="submit">Salvar</button>
</form>