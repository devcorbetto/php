<!-- agregar_autor.php -->
<h1>Agregar Nuevo Autor</h1>

<form action="<?= base_url('autores/guardar') ?>" method="post">
    <label>Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label>Biografía:</label>
    <textarea name="bio" rows="4" required></textarea>
    <br>
    <input type="submit" value="Guardar">
</form>
