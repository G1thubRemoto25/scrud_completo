<h2>Editar Contacto</h2>
<form method="POST" action="/contactos/actualizar">
    <input type="hidden" name="id" value="<?= $c['id'] ?>">
    <input type="text" name="nombre" value="<?= $c['nombre'] ?>" required>
    <input type="text" name="telefono" value="<?= $c['telefono'] ?>" required>
    <input type="email" name="email" value="<?= $c['email'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
<a href="/contactos">Volver</a>
