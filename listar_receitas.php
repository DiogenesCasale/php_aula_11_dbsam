<?php
include 'db.php';

$codigoSQL = "SELECT r.id, p.nome AS paciente, r.medicamento, r.data_administracao, r.hora_administracao, p.leito 
        FROM receitas r 
        JOIN pacientes p ON r.paciente_id = p.id 
        WHERE r.id NOT IN (SELECT receita_id FROM administracoes)";

$comando = $conexao->query($codigoSQL);
$resultado = $comando->fetchAll();
    
foreach ($resultado as $resultado) {
    echo "Paciente: " . $resultado['paciente'] . "<br>";
    echo "Medicamento: " . $resultado['medicamento'] . "<br>";
    echo "Data: " . $resultado['data_administracao'] . " " . $resultado['hora_administracao'] . "<br>";
    echo "Leito: " . $resultado['leito'] . "<br>";
    echo "<a href='registrar_administracao.php?receita_id=" . $resultado['id'] . "'>Registrar Administração</a><br><br>";
}
?>
