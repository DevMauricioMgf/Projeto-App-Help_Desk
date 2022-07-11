<?php

    session_start();
/* 
    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr>';
    echo $_SESSION['y'] . '<br>'; */

    //variavel que verifica se a autenticidade foi realizada
    $usuario_autenticidado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
    
    //usuarios do sistema

    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@desk.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@desk.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@desk.com', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@desk.com', 'senha' => '1234', 'perfil_id' => 2)
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
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticidado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        
        header('Location: home.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>