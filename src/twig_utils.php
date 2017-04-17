<?php

$url_for = new Twig_SimpleFunction('url_for',
    function ($directory, $filename = null) {
        $http_method = isSecure() ? 'https' : 'http';
        $filename = !empty($filename) ? '/' . $filename : '';

        return $http_method . '://' . $_SERVER['SERVER_NAME'] . '/' . $directory . $filename;
    }
);

$twig->addFunction($url_for);
