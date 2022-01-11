<?php

    session_start();

    // print'<pre>';
    // print_r($_SESSION);
    // print'</pre>';

    // // remover índices do array de sessão
    // // unset()

    // unset($_SESSION['x']); // remove o índice apenas se existir

    // print'<pre>';
    // print_r($_SESSION);
    // print'</pre>';

    // // destruir a variável de sessão
    // // session_destroy()

    // session_destroy(); // será destruída
    // // forçar um redirecionamento

    // print'<pre>';
    // print_r($_SESSION);
    // print'</pre>';


    session_destroy();
    header('Location: index.php');

?>