<?php

require_once '../src/App.class.php';
require_once '../src/Blueprint.class.php';


class Index extends Blueprint {
    function __construct() {
        $this->base_url = '/';
    }
    
    function get() {
        return "This was a get request!";
    }

    function post() {
        return "This was a post request!";
    }
}

$app = new App();

$app->register_blueprint("Index");

$app->route("/test", function(){
    return "Test!";
});

$app->run(true);
