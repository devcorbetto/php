<!-- book_list.php -->
<h1>Lista de Libros</h1>

<form action="<?= base_url('books/search') ?>" method="post">
    <input type="text" name="keyword" placeholder="Buscar por t¨ªtulo o autor">
    <input type="submit" value="Buscar">
</form>

<table>
    <tr>
        <th>ID</th>
        <th>T¨ªtulo</th>
        <th>Autor</th>
        <th>Descripci¨®n</th>
        <th>Precio</th>
    </tr>
    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book['id'] ?></td>
        <td><?= $book['title'] ?></td>
        <td><?= $book['author'] ?></td>
        <td><?= $book['description'] ?></td>
        <td><?= $book['price'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
