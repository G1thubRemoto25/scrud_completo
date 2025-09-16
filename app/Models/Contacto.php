<?php
namespace App\Models;
use App\Core\Database;

class Contacto {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function todos($usuario_id) {
        $stmt = $this->db->prepare("SELECT * FROM contactos WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll();
    }

    public function crear($usuario_id, $nombre, $telefono, $email) {
        $stmt = $this->db->prepare("INSERT INTO contactos (usuario_id, nombre, telefono, email) VALUES (?, ?, ?, ?)");
        $stmt->execute([$usuario_id, $nombre, $telefono, $email]);
    }

    public function buscar($id) {
        $stmt = $this->db->prepare("SELECT * FROM contactos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function actualizar($id, $nombre, $telefono, $email) {
        $stmt = $this->db->prepare("UPDATE contactos SET nombre=?, telefono=?, email=? WHERE id=?");
        $stmt->execute([$nombre, $telefono, $email, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM contactos WHERE id=?");
        $stmt->execute([$id]);
    }
}
