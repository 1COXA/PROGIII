<?php
$email_cookie = $_COOKIE['lembrar_email'] ?? '';
?>
<form method="POST" action="processa_login.php">
    Email: <input type="email" name="email" value="<?= $email_cookie ?>" required><br>
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar" value="1"> Lembrar e-mail</label><br>
    <button type="submit">Entrar</button>
</form>
