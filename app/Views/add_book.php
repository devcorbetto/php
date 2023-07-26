<!-- add_book.php -->
<h1>Agregar Nuevo Libro</h1>

<form action="<?= base_url('books/save') ?>" method="post">
    <label>Título:</label>
    <input type="text" name="title" required>
    <br>
    <label>Descripción:</label>
    <textarea name="description" rows="4" required></textarea>
    <br>
    <label>Precio:</label>
    <input type="number" name="price" step="0.01" required>
    <br>
    <label>Autor:</label>
   <select name="author_id">
        <?php foreach ($autores as $autor): ?>
            <option value="<?= $autor['id'] ?>"><?= $autor['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Guardar">
</form>
