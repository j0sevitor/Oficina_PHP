<?php
require_once '../Components/cabecalho.php';
$pagina = 'inicio';
$acao = isset($_GET['a']) ? $_GET['a'] : 'noticias';

require_once '../../App/Controller/InicioController.php';
switch($acao){
    case 'detalhe':
        require_once 'Pages/detalhe.php';
        break;
    default:
        require_once 'Pages/noticias.php';
    break;
}

require_once '../Components/rodape.php';