<?php

require_once('config/config.php');
require_once(CONNEX_DIR);
require_once('lib/core.php');

$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];

$controller_file = "controllers/" . ucfirst($controller) . "Controller.php";

if (!file_exists($controller_file)) {
    trigger_error('Impossible de trouver le fichier du contrôleur: ' . $controller_file);
    exit();
}

require_once($controller_file);

$controller_function = strtolower($controller) . "_controller_" . $function;

if (!function_exists($controller_function)) {
    trigger_error('Impossible de trouver la fonction: ' . $controller_function);
    exit();
}

call_user_func($controller_function, $_REQUEST);

?>