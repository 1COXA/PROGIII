<?php
require_once 'Usuario.php';

class Autenticador {
    private static $usuarios = [];

    public static function registrar($usuario) {
        self::$usuarios[] = $usuario;
    }

    public static function login($email, $senha) {
        foreach (self::$usuarios as $usuario) {
            if ($usuario->autenticar($email, $senha)) {
                return $usuario;
            }
        }
        return null;
    }
}
