<?php
include 'db.php';

$codigoSQL = "INSERT INTO `pacientes` (`nome`, `leito`) VALUES (:nomepac, :leit);";

    try {
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('nomepac' => $_POST['nome'],'leit' => $_POST['leito']));
        

        if($resultado){
            echo "Paciente Cadastrado Com Sucesso!";
            echo "<br>";
        } else {
            echo "Erro ao executar o comando!";
        }
    } catch (Exception $e) {
        echo "Erro $e";
        }
        
        $conexao = null;

?>