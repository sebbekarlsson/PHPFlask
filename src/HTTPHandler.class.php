<?php

abstract class HTTPHandler {
    var $base_url;
    var $routes;

    /**
     * Registers a route.
     *
     * @param String $path
     * @param String || function $func
     */
    public function route($path, $func) {
        $this->routes[] = [
            'type' => 'function',
            'path' => $path,
            'func' => $func
        ]; 
    }

    public function get_routes() {
        if (empty($this->routes)) { return []; }

        return $this->routes;
    }
}
