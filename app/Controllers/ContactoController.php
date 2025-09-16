<?php
namespace App\Controllers;
use App\Models\Contacto;

class ContactoController {
    public function index() {
        $contacto = new Contacto();
        $contactos = $contacto->todos($_SESSION['user_id']);
        require __DIR__ . '/../../views/contactos/index.php';
    }

    public function crear() {
        require __DIR__ . '/../../views/contactos/crear.php';
    }

    public function guardar() {
        $contacto = new Contacto();
        $contacto->crear($_SESSION['user_id'], $_POST['nombre'], $_POST['telefono'], $_POST['email']);
        header('Location: /contactos');
    }

    public function editar() {
        $contacto = new Contacto();
        $c = $contacto->buscar($_GET['id']);
        require __DIR__ . '/../../views/contactos/editar.php';
    }

    public function actualizar() {
        $contacto = new Contacto();
        $contacto->actualizar($_POST['id'], $_POST['nombre'], $_POST['telefono'], $_POST['email']);
        header('Location: /contactos');
    }

    public function eliminar() {
        $contacto = new Contacto();
        $contacto->eliminar($_POST['id']);
        header('Location: /contactos');
    }
}
