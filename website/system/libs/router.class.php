<?php
class router {
    private $module, $controller, $action;

    public function route() {
        $path = isset($_GET['r']) ? $_GET['r'] : config::getconfig('system', 'page_default');
        $path = str_replace('//', '/', trim($path, '/'));

        $parts = explode('/', $path);

        switch(count($parts)) {
            case 1:
                $module = $controller = $parts[0];
                $action = 'init';
                break;
            case 2:
                $module = $controller = $parts[0];
                $action = $parts[1];
                break;
            case 3:
                $module = $parts[0];
                $controller = $parts[1];
                $action = $parts[2];
                break;
            default:
                exit(0);
        }

        base::loadlib('controller');
        base::loadmodule($controller, $module);

        if (!method_exists($controller, $action)) {
            header('Location: '.SITE_URL.'/'.config::getconfig('system', 'page_404'));
        }
        
        $service = new $controller();
        base::$app->controller = $service;
        if (method_exists($service, $action)) {
            define('ROUTE_M', $module);
            define('ROUTE_C', $controller);
            define('ROUTE_A', $action);
        }
    }
}