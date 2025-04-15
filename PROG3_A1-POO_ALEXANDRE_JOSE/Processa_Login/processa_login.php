<?php
require_once 'classes/Autenticador.php';
require_once 'classes/Sessao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

Sessao::iniciar();
$usuario = Autenticador::login($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if (!empty($_POST['lembrar'])) {
        setcookie("lembrar_email", $usuario->getEmail(), time() + (86400 * 30), "/");
    }

    header("Location: dashboard.php");
    exit;
} else {
    echo "Credenciais inválidas.";
}
