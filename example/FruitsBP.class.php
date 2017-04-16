<?php

class FruitsBP extends Blueprint {
    var $fruits;

    public function __construct() {
        $this->route('/fruits', 'main');
    }

    public function init() {
        $this->fruits = [
            'apple',
            'banana',
            'raspberry',
            'papaya',
            'orange'
        ];
    }

    function main() {
        return json_encode($this->fruits);
    }
}
