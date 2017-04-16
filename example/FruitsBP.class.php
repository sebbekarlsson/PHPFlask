<?php

class FruitsBP extends Blueprint {
    var $fruits;
    
    function __construct() {
        $this->base_url = '/fruits';
    }

    function init() {
        $this->fruits = [
            'apple',
            'banana',
            'raspberry',
            'papaya',
            'orange'
        ];
    }

    function route() {
        return json_encode($this->fruits);
    }
}
