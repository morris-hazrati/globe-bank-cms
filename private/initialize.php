<?php 
    define("PRIVATE_PATH", dirname(__FILE__));
    define('PROJECT_PATH', dirname(PRIVATE_PATH));
    define("PUBLIC_PATCH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    $public_end=strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    //echo '<p>' . $_SERVER['SCRIPT_NAME'] . '</p>';
    //echo $public_end;
    $doc_root = substr($_SERVER['SCRIPT_NAME'] , 0 , $public_end);
    //echo '<p> $doc_root is: ' . $doc_root . '</p>';
    define("WWW_ROOT" , $doc_root);
    //echo '<p> WWW_ROOT is: ' . WWW_ROOT . '</p>';
    

    require_once('functions.php');
?>