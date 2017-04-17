<?php

abstract class HTTPHandler {
    var $base_url;
    var $routes;

    function __construct() {
        $this->routes = [];
    }

    /**
     * Registers a route.
     *
     * @param String $path
     * @param String || function $func
     */
    public function route($path, $func) {
        $base_url = !empty($this->base_url) ? $this->base_url : '';

        if (!empty($this->base_url))
            $path = $path != '/' ? $path : '';

        $this->routes[] = [
            'type' => 'function',
            'path' => $base_url . $path,
            'func' => $func
        ]; 
    }

    public function get_routes() {
        return !empty($this->routes && is_array($this->routes)) ? 
            $this->routes : [];
    }
}
