

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Enfermeiro</title>
</head>
<body>

<form action="salvar_enfermeiro.php" method="POST">
    Nome: <input type="text" name="nome" required><br>
    COREN: <input type="text" name="coren" required><br>
    Usuário: <input type="text" name="usuario" required><br>
    Senha: <input type="text" name="senha" required><br>
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>