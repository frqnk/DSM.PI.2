<?php
require_once '../banco_de_dados.php';
$con = (new DBConnect())->getConn();

$redatores = $con->prepare('SELECT * FROM redator')->fetchAll();

$artigos = $con->query('SELECT 
    administrador.login as adminstradorNome, artigo.* 
    FROM artigo 
    LEFT JOIN administrador ON artigo.FK_Administrador_ID = administrador.id')->fetchAll();
?>

<?php if (isset($_GET['msg'])) : ?>
    <div class="bg-success"><?= $_GET['msg'] ?></div>
<?php endif; ?>
<table class="table">
    <tr>
        <th>Nome Artigo</th>
        <th>Nome Redator</th>
        <th>Data Publicacao</th>
        <th>Data Alteracao</th>
        <th>Admin</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($artigos as $artigo) : ?>
        <tr>
            <td><?= $artigo['nomeArtigo'] ?></td>
            <td><?= $artigo['nomeRedator'] ?></td>
            <td><?= $artigo['dataPublicacao'] ?></td>
            <td><?= $artigo['dataAlteracao'] ?></td>
            <td><?= $artigo['adminstradorNome'] ?></td>
            <td>
                <a href="form.php?artigo_id=<?= $artigo['ID'] ?>">Editar</a>
                <a href="delete.php?artigo_id=<?= $artigo['ID'] ?>" onclick="return confirm('Deseja realmente apagar?')">
                    Apagar
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<a href="form.php">Novo artigo</a>