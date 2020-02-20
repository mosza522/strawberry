<?php
session_start();

$lang=$_SESSION['lang'];
session_destroy();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['lang']=$lang;


// foreach($_SESSION as $key)
// {
//
// if ($key !== 'lang')
// {
// unset($_SESSION[$key]);
// }
//
// }
    //unset($_SESSION['user_id']);


?>
