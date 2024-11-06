
<?php

include 'db.php';

$codigoSQL = "INSERT INTO `enfermeiros` (`nome`, `coren`, `usuario`, `senha`) VALUES (:nomeenf, :coren, :usu, :senh);";

    try {
        $comando = $conexao->prepare($codigoSQL);

        $resultado = $comando->execute(array('nomeenf' => $_POST['nome'],'coren' => $_POST['coren'],'usu' => $_POST['usuario'],'senh' => $_POST['senha']));
        

        if($resultado){
            echo "Enfermeiro Cadastrado Com Sucesso!";
            echo "<br>";
        } else {
            echo "Erro ao executar o comando!";
        }
    } catch (Exception $e) {
        echo "Erro $e";
        }
        
        $conexao = null;

        echo "<a href='login_enfermeiro.php'>Ir para Login Enfermeiro</a>"
?>