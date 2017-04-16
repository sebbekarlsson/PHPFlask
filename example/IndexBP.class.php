<?php

class IndexBP extends Blueprint {
    function __construct() {
        $this->base_url = '/';
    }
    
    public function route() {
        switch($_SERVER['REQUEST_METHOD']) {
            case 'POST':
                return 'This was a POST request!';
            break;
            case 'GET':
                return 'This was a GET request!';
            break;
        }
    }
}
