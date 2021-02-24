<?php 

//***************************//
//      SESSIONS             //
//***************************//

ini_set('session.cookie_lifetime', true);
session_start();

//***************************//
//      ERRORS DISPLAY       //
//***************************//
error_reporting(E_ALL);
ini_set('display_errors', true);



//Paths
    define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
    define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));

//website informations
    define("WEBSITE_TITLE", "mon site");
    define("WEBSITE_NAME", "Mon site");
    define("WEBSITE_URL", "https://monsite.com");
    define("WEBSITE_DESCRIPTION", "T");
    define("WEBSITE_KEYWORDS", "");
    define("WEBSITE_LANGUAGE", "");
    define("WEBSITE_AUTHOR", "");
    define("WEBSITE_AUTHOR_MAIL", "");

//Facebook open graph tags
    define("WEBSITE_FACEBOOK_NAME", "");
    define("WEBSITE_FACEBOOK_DESCRIPTION", "");
    define("WEBSITE_FACEBOOK_URL", "");
    define("WEBSITE_FACEBOOK_IMAGE", "");
    
//Database informations
    define("DATABASE_HOST", "localhost");
    define("DATABASE_NAME", "blog");
    define("DATABASE_USER", "root");
    define("DATABASE_PASSWORD", "");
?>