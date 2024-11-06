<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Médico</title>
</head>
<body>

<form action="salvar_medico.php" method="POST">
    Nome: <input type="text" name="nome" required><br>
    Especialidade: <input type="text" name="especialidade" required><br>
    CRM: <input type="text" name="crm" required><br>
    Usuário: <input type="text" name="usuario" required><br>
    Senha: <input type="text" name="senha" required><br>
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>