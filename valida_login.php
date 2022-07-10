<?php

    session_start();

    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr>';
    echo $_SESSION['y'] . '<br>';

    //variavel que verifica se a autenticidade foi realizada
    $usuario_autenticidado = false;
    
    //usuarios do sistema

    $usuarios_app = array(
        array('email' => 'adm@desk.com', 'senha' => '123456'),
        array('email' => 'user@desk.com', 'senha' => 'abcd')
    );
/* 
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
 */

    foreach ($usuarios_app as $user) {
        /* echo 'Usuário app: ' . $user['email'] . '/' . $user['senha'];
        echo '<br>';
        echo 'Usuário form: ' . $_POST['email'] . '/' . $_POST['senha']; */
    
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticidado = true;
        }
    }

    if($usuario_autenticidado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
    /* 
    print_r($_GET);

    echo '<br>';

    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];
 */
/* 
    print_r ($_POST);

    echo '<br>';

    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha']; */
?>