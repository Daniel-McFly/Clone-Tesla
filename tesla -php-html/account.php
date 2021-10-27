<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="images/logo.png" class="logo">
    </header>
    <div class="login">
        <h1>Sign In</h1>
        <form class="formLogin" method="POST" action="trmAccount.php">
            <p><b>Email Adress</b></p>
            <input type="email"autocomplete=off class="email" name="email" />
            <p><b>Password</b></p>
            <input autocomplete=off class="password" name="password" type="password" />
            <br>
            <button type="submit" class="sign">SIGN IN</button>
            <br>
        </form>
            <button class="cancel">CANCEL</button>
            <br>
            <br>
            <a class="or"><b>-------------OR------------</b></a>
            <br>
            <br>
       
            <button class="createAccount" onclick="window.location.href = 'cadastro.php'">CREATE  ACCOUNT</button>
      
        
    </div>
    
    

</body>
</html>