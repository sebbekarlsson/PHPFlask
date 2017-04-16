<?php

$loader = new Twig_Loader_Filesystem(TEMPLATE_DIRECTORY);
$twig = new Twig_Environment($loader, []);

function render_template($template_path, $args=[]) {
    global $twig;

    if (empty($args)) {
        $args = [];
    }

    return $twig->render($template_path, $args);
}
