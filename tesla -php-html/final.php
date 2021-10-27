<?php 
session_start();

$nome = $_SESSION['nome'];

echo "esse é o fim, muito obrigado {$nome} por chegar até aqui"
?>