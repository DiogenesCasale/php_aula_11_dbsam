<?php

include 'db.php';

$codigoSQL = "INSERT INTO `medicos` (`nome`, `especialidade`, `crm`, `usuario`, `senha`) VALUES (:nomemed, :esp, :crm, :usu, :senh);";

    try {
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('nomemed' => $_POST['nome'],'esp' => $_POST['especialidade'],'crm' => $_POST['crm'],'usu' => $_POST['usuario'],'senh' => $_POST['senha']));
        

        if($resultado){
            echo "Médico Cadastrado Com Sucesso!";
            echo "<br>";
        } else {
            echo "Erro ao executar o comando!";
        }
    } catch (Exception $e) {
        echo "Erro $e";
        }
        
        $conexao = null;

        echo "<a href='login_medico.php'>Ir para Login Médico</a>"
?>