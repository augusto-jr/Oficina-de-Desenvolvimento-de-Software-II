<?php

define('ROOT_PATH',dirname(__DIR__));

require_once (ROOT_PATH.'/app/controllers/AtividadeComplementarController.php');
require_once (ROOT_PATH.'/app/controllers/TipoAtividadeController.php');
require_once (ROOT_PATH.'/app/controllers/AlunoController.php');
require_once (ROOT_PATH.'/config/routers.php');


if ( strtoupper($route[0]) == 'ATIVIDADECOMPLEMENTAR' ) {
    
    $controller = new AtividadeComplementarController();

    if ( $route[1] == 'index' )
        $controller->index();

    elseif ( $route[1] == 'create' )
        $controller->create($_POST);

    elseif ( $route[1] == 'delete' )
        $controller->delete($id);

    elseif ( $route[1] == 'edit' )
        $controller->edit($_POST, $id);

    elseif ( $route[1] == 'show' )
        $controller->show($id);
    
    else
        require_once '../app/views/404.php';


} elseif ( strtoupper($route[0]) == 'TIPOATIVIDADE' ) {
    
    $controller = new TipoAtividadeController();

    if ( $route[1] == 'index' )
        $controller->index();

    elseif ( $route[1] == 'create' )
        $controller->create($_POST);

    elseif ( $route[1] == 'delete' )
        $controller->delete($id);

    elseif ( $route[1] == 'edit' )
        $controller->edit($_POST, $id);

    elseif ( $route[1] == 'show' )
        $controller->show($id);
    else
        require_once '../app/views/404.php';

} elseif ( strtoupper($route[0]) == 'ALUNO' ) {

    $controller = new AlunoController();

    if ($route[1] == 'index' )
        $controller->index();
    
    elseif ( $route[1] == 'create' )
        $controller->create($_POST);

    elseif ( $route[1] == 'delete' )
        $controller->delete($id);

    elseif ( $route[1] == 'edit' )
        $controller->edit($_POST,$id);

    elseif ( $route[1] == 'show' )
        $controller->show($id);

    else
        require_once '../app/views/404.php';

} else
    require_once '../app/views/404.php';
