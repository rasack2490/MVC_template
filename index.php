<?php
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';

//definition de la page courante
    if(isset($_GET['page']) AND !empty($_GET['page'])){
        $page = trim(strtolower($_GET['page']));
    }else{
        $page= 'home';
    }
//array contenant toutes les pages
    $allpages = scandir('controllers/');
    

    if(in_array($page.'_controller.php', $allpages)){
        //inclusion de la page
        include_once 'model/'.$page.'_model.php';
        include_once 'controllers/'.$page.'_controller.php';
        include_once 'views/'.$page.'_view.php';
    }else{
        //retour d'une erreur
        echo 'erreur 404';

    }
?>