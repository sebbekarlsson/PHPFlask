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

        foreach($this->routes as $route) {
            if (is_object($route)) {
                if ($uri == $route->base_url) {
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        echo $route->post();
                    } else {
                        echo $route->get();
                    }

                    break;
                }
            }
        }
    }

    /**
     * Registers a blueprint that will be used as a route.
     *
     * @param Blueprint $blueprint
     */
    public function register_blueprint($blueprint) {
        if (!class_exists($blueprint)) {
            throw new Exception("Class: $blueprint does not exist.");
        }

        $this->routes[] = new $blueprint();
    }

    /**
     * Registers a route.
     *
     * @param String $path
     * @param function $func
     */
    public function route($path, $func) {
    
    }
}
