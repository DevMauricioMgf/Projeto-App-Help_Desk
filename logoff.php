<?php
//iniciar seção para ter acesso a super global
session_start();
/* 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';


//remover índice de array de sessão
//unset()

unset($_SESSION['x']); //para remover um indice apenas se existir

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


//destruir a varável de sessão
//session_destroy()

session_destroy();//será destruida
//forçar um redirecionamento

echo '<pre>';
print_r($_SESSION);
echo '</pre>'; */

session_destroy();
header ('Location: index.php');
?>