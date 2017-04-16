<?php

abstract class Blueprint {
    var $base_url;

    public function init() {
        /* silence */
    }

    public abstract function route();
}
