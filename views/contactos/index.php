<h2>Mis Contactos</h2>
<a href="/contactos/crear">Agregar contacto</a>
<ul>
<?php foreach($contactos as $c): ?>
    <li>
        <?= $c['nombre'] ?> - <?= $c['telefono'] ?> - <?= $c['email'] ?>
        <a href="/contactos/editar?id=<?= $c['id'] ?>">Editar</a>
        <form method="POST" action="/contactos/eliminar" style="display:inline" 
      onsubmit="return confirm('¿Seguro que deseas eliminar este contacto?');">
    <input type="hidden" name="id" value="<?= $c['id'] ?>">
    <button type="submit">Eliminar</button>
</form>


    </li>
<?php endforeach; ?>
</ul>
<a href="/logout">Cerrar sesión</a>
