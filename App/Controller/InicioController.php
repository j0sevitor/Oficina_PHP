<?php require_once '../../Autoload.php';
switch($acao){
    case 'detalhe':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $noticia = new Noticias();
            $noticias = $noticia->getPeloId($id);
            $item = $noticias[0];
        }
        break;
    default:
        $noticia = new Noticias();
        $noticias = $noticia->get();
    break;
}