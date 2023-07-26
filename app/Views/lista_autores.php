<!-- lista_autores.php -->
<h1>Lista de Autores</h1>

<a href="<?= base_url('autores/agregar') ?>">Agregar Autor</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Biografía</th>
    </tr>
    <?php foreach ($autores as $autor): ?>
    <tr>
        <td><?= $autor['id'] ?></td>
        <td><?= $autor['name'] ?></td>
        <td><?= $autor['bio'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
