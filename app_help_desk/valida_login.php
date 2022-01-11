<?php

    session_start();

    

    // variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuario');

    // usuários do sistema
    $usuarios_app = array(
        array('id' => 1,'email' => 'adm@hotmail.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2,'email' => 'admer@hotmail.com', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3,'email' => 'william@hotmail.com', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4,'email' => 'teste@hotmail.com', 'senha' => '1234', 'perfil_id' => 2),
    );

    // print '<pre>';
    // print_r($usuarios_app);
    // print '</pre>';

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];

        }




        
    }

    if($usuario_autenticado) {
        print 'Usuário autenticado com sucesso';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id; // 
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
        
    }
    else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
        print '<br />';
    }

    /*
    print_r($_GET)

    echo '<br />'
    echo $_GET['email']
    echo '<br />'
    echo $_GET['senha']
    */
    // print_r($_POST);

    // print '<br />';
    // print $_POST['email'];
    // print '<br />';
    // print $_POST['senha'];

?>