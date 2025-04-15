<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header("Location: login.php");
    exit;
}

$nome = $usuario->getNome();
$email_cookie = $_COOKIE['lembrar_email'] ?? null;

echo "Bem-vindo, $nome!<br>";
if ($email_cookie) {
    echo "Email lembrado: $email_cookie<br>";
}
echo '<a href="logout.php">Sair</a>';
