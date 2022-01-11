<?php

    session_start();

    // print '<pre>';
    // print_r($_POST);
    // print '</pre>';

    //estamos trabalhando na montagem do texto
    $texto2 = $_SESSION['id'] . '#' . $_POST['titulo'] . '#' .  $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;
    $string = implode(' ', explode(' # ', $texto2));

    


    //////////////////////
    // str_replace 

    /*$titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo . '#' .  $categoria . '#' . $descricao;
    print $texto;
    print '<br/>';*/


    //////////////////////
    // implode & explode

    // abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    // escrevendo o texto
    fwrite($arquivo, $string);
    // fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php')


    //print $string;
    


?>