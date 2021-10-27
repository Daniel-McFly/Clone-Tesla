<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="images/logo.png" class="logo">
    </header>
    <div class="cadastro">
        <h1>Sign In</h1>
        <form class="formCadastro" method="POST" action="trmCadastro.php">
            <p><b>Name</b></p>
            <input autocomplete=off class="nome" name="nome" />
            <br>
            <p><b>Email</b></p>
            <input type="email"autocomplete=off class="email" name="email" />
            <p><b>Password</b></p>
            <input autocomplete=off class="password" name="password" />
            <br>
            <button type="submit" class="cadastrar">CREATE ACCOUNT</button>
            <br>
        </form>
        <button class="cancel">CANCEL</button>
            <br>
            <br>
            <a class="or"><b>-------------OR------------</b></a>
            <br>
            <br>
        <button class="sign" onclick="window.location.href = 'Account.php'">SIGN IN</button>
        
    </div>
    
    

</body>
</html>