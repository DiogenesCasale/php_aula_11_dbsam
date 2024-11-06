<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Paciente</title>
</head>
<body>

<?php
if (isset($_SESSION['enfermeiro_id']) || isset($_SESSION['medico_id'])) {
    
    if (isset($_SESSION['enfermeiro_id']) && isset($_SESSION['enfermeiro'])) {
        $enfermeiro = $_SESSION['enfermeiro'];
        echo "Enfermeiro {$enfermeiro['nome']} logado com sucesso no sistema";
    }
    else if (isset($_SESSION['medico_id']) && isset($_SESSION['medico'])) {
        $medico = $_SESSION['medico'];
        echo "Médico {$medico['nome']} logado com sucesso no sistema";
    }
} else {
    echo "Você não está logado. Faça Login como Médico ou Enfermeiro!";
    echo "<a href='index.php'><button>Login</button></a>";
    exit();
}
?>

<form action="salvar_paciente.php" method="POST">
    Nome: <input type="text" name="nome" required><br>
    Leito: <input type="text" name="leito" required><br>
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>