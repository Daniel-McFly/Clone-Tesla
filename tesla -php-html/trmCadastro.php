<?php
session_start();
$conexao = mysqli_connect("sql10.freemysqlhosting.net", "sql10447256","taRJhw6RF4","sql10447256");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];

mysqli_begin_transaction($conexao);
$sql = "INSERT INTO login (email, nome, senha) VALUES('$email','$nome',md5('$senha'))" ; 

if(mysqli_query($conexao, $sql))
    {          
        //Salvando a transação
        mysqli_commit($conexao);
        header('Location: account.php');

    }

    //caso não consiga fazer o insert
    else
    {
        //Escreve uma mensagem de erro, mostrando o erro ocorrido no banco
        echo "Deu ruim";
        
        //Reverte toda a transação
        mysqli_rollback($conexao);
        header('cadastro.php');
    }  
    
?>