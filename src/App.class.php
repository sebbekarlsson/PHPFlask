<?php

/**
 * The routing application
 */
class App {
    var $blueprints;

    function __construct() {
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
    }

    /**
     * Registers a blueprint that will be used as a route.
     *
     * @param Blueprint $blueprint
     */
    public function register_blueprint($blueprint) {

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
