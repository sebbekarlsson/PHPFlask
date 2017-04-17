<?php

/**
 * The routing application
 */
class Flask extends HTTPHandler {
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
                foreach($route['src']->get_routes() as $b_route) {
                    $obj = $route['src'];

                    if ($b_route['path'] == $uri) {
                        $obj->init();

                        echo $obj->$b_route['func']();

                        return;
                    }
                }

                break;
            case 'function':
                if ($route['path'] != $uri) { break; }

                echo $route['func']();

                return;
            }
        }

        if (defined('TEMPLATE_404') && defined('TEMPLATE_DIRECTORY')) {
            echo render_template(TEMPLATE_404);
        } else {
            echo render_response(404, '404 not found');
        }
    }

    /**
     * Registers a blueprint that will be used as a route.
     *
     * @param Blueprint $blueprint_obj
     */
    public function register_blueprint($blueprint_obj) {
        $this->routes[] = [
            'type' => 'blueprint',
            'src' => $blueprint_obj
        ];
    }
}
