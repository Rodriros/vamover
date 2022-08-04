<?php
//    session_start();
//    $_SESSION['nome'] = 'Rodrigo';
//    $_SESSION['idade']='29';
    setcookie('nome','rodrigo',time() + (60*60),'/' );

    echo $_COOKIE['nome'];

?>