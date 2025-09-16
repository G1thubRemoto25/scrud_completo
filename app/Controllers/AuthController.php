<?php
namespace App\Controllers;
use App\Core\Database;
use App\Models\Usuario;

class AuthController {
    public function loginForm() {
        require __DIR__ . '/../../views/auth/login.php';
    }

    public function login() {
        $usuario = new Usuario();
        $user = $usuario->buscarPorEmail($_POST['email']);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: /contactos');
        } else {
            echo " Credenciales inválidas";
        }
    }

    public function registerForm() {
        require __DIR__ . '/../../views/auth/register.php';
    }

    public function register() {
        $usuario = new Usuario();
        $usuario->crear($_POST['nombre'], $_POST['email'], $_POST['password']);
        header('Location: /');
    }

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}
