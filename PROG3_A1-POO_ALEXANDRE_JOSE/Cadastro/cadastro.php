<?php
$mensagem = $_GET['mensagem'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 20px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .mensagem {
            margin-bottom: 20px;
            color: green;
            font-weight: bold;
            text-align: center;
        }
        .erro {
            color: red;
            font-weight: bold;
        }
    </style>
    <script>
        function validarFormulario() {
            const nome = document.forms["formCadastro"]["nome"].value;
            const email = document.forms["formCadastro"]["email"].value;
            const senha = document.forms["formCadastro"]["senha"].value;

            if (!nome || !email || !senha) {
                alert("Todos os campos devem ser preenchidos!");
                return false;
            }

            if (senha.length < 6) {
                alert("A senha deve conter no mínimo 6 caracteres.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>

        <?php if ($mensagem): ?>
            <div class="mensagem"><?= htmlspecialchars($mensagem) ?></div>
        <?php endif; ?>

        <form name="formCadastro" method="POST" action="processa_cadastro.php" onsubmit="return validarFormulario()">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required minlength="6">

            <button type="submit">Cadastrar</button>
        </form>

        <p style="text-align:center; margin-top: 16px;">
            Já tem conta? <a href="login.php">Faça login</a>
        </p>
    </div>
</body>
</html>
