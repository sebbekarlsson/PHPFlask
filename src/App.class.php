<?php

/**
 * The routing application
 */
class App {
    var $routes;

    function __construct() {
        $this->routes = [];
    }

    /**
     * Runs the application, will start
     * parsing requests.
     *
     * @param bool $debug
     */
    public function run($debug=false) {
        if ($debug) {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        }
        
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route) {
            if (!isset($route['type'])) { continue; }

            switch ($route['type']) {
                case 'blueprint':
                    if ($route['src']->base_url != $uri) { break; }

                    $route['src']->init();
                    echo $route['src']->route();
                break;
                case 'function':
                    if ($route['path'] != $uri) { break; }

                    echo $route['func']();
                break;
            }
        }
    }

    /**
     * Registers a blueprint that will be used as a route.
     *
     * @param Blueprint $blueprint
     */
    public function register_blueprint($blueprint_obj) {
        $this->routes[] = [
            'type' => 'blueprint',
            'src' => $blueprint_obj
        ];
    }

    /**
     * Registers a route.
     *
     * @param String $path
     * @param function $func
     */
    public function route($path, $func) {
        $this->routes[] = [
            'type' => 'function',
            'path' => $path,
            'func' => $func
        ]; 
    }
}
