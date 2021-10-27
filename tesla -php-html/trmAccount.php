<?php
session_start();
if(empty($_POST['email']) || empty($_POST['password']))
{
    header('Location: account.php');
    exit();
}
$conexao = mysqli_connect("sql10.freemysqlhosting.net", "sql10447256","taRJhw6RF4","sql10447256");
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select idLogin, email, nome, senha from login where email = '{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 1){
        $aux = mysqli_fetch_assoc($result);
        $_SESSION['nome'] = $aux['nome'];
        header('Location: final.php');
        

        exit();
}
else{
    header('Location: account.php');
    //Sai da página
    exit();
        
}
?>