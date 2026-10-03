<?php
require_once 'config/autoload.php';
require_once 'config/routes.php';

$url = $_GET['url'] ?? $roote['default_controller'] . '/' . $route['default_method'];


$segment   = explode('/', $url);
$method    = $segment[1];
$parameter = $segment[2] ?? null;

$controllerName = ucfirst($segment[0]);
$controllerFile = 'controller/' . $controllerName . '.php';

$objController = new $controllerName();
if (method_exists($objController, $method)) {
    if ($parameter != null) {
        $objController->$method($parameter);
    } else {
        $objController->$method();
    }
} else {
    echo "Method tidak ditemukan.";
}
?>