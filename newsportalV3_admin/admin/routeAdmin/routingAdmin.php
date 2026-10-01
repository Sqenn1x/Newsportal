<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host,'/');
$path = explode('/', $host)[$num];

if ($path == '' || $path == 'index.php') {
    // Главная страница
    $response = controllerAdmin::formLoginSite();
}
elseif ($path == 'login') {
    // Вход
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout') {
    // Выход
    $response = controllerAdmin::logoutAction();
}
else {
    // Страница не существует
    $response = controllerAdmin::error404();
}
?>