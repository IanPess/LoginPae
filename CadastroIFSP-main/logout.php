<?php
    include('iniciasessao.php');
    //Limpa variaveis da sessao
    session_unset();
    //destroi a sessao
    session_destroy();
    //Volta para pagina inicial
    header('Location: index.php');

?>