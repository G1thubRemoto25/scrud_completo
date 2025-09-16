<?php
namespace App\Models;
use App\Core\Database;

class Usuario {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function crear($nombre, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, password_hash($password, PASSWORD_BCRYPT)]);
    }

    public function buscarPorEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
