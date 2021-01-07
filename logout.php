<?php
session_start();

$_SESSION = array();
if (ini_set('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name() . '',time() - 42000,
        $params['path'], $params['domain'], $params['sucure'], $params['httponly']);
}
session_destroy();

setcookie('email', '', time()-3600);

header('Location: login.php');
exit();
?>