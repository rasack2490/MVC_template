<?php 
//cette function permet de securiser une chaine de caractere 
    function str_secur($string){
        return trim(htmlspecialchars($string));
    }

    function debug($var){
        echo '<pre>';
            var_dump($var);
        echo '</pre>';
    }
?>