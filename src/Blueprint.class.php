<?php

abstract class Blueprint {
    var $base_url;

    public abstract function get();
    public abstract function post();
}
