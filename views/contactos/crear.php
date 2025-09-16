<h2>Nuevo Contacto</h2>
<form method="POST" action="/contactos/guardar">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Guardar</button>
</form>
<a href="/contactos">Volver</a>
