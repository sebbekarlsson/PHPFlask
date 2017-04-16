<?php

$loader = new Twig_Loader_Filesystem(TEMPLATE_DIRECTORY);
$twig = new Twig_Environment($loader, []);

/**
 * Render a twig template.
 * This is in place of Jinja which is used in Flask.
 *
 * @param String $template_path
 * @param Array $args
 *
 * @return String
 */
function render_template($template_path, $args=[]) {
    global $twig;

    if (empty($args) && !is_array($args)) {
        $args = [];
    }

    return $twig->render($template_path, $args);
}

/**
 * Render response with HTTP code
 *
 * @param int $code
 * @param String message
 *
 * @return String
 */
function render_response($code, $message) {
    http_response_code($code);
    
    return "<!DOCTYPE html><html><body>$message</body></html>";
    
    die();
}
