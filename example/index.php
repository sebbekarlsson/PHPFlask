<?php

/* We need to specify where to look for templates. */
define('TEMPLATE_DIRECTORY', __DIR__  . '/templates');


require_once '../src/index.php';
require_once 'IndexBP.class.php';
require_once 'FruitsBP.class.php';

/* Creating the app */
$app = new Flask();

/* Blueprints */
$index_bp = new IndexBP();
$fruits_bp = new FruitsBP();

/* Registering our blueprints */
$app->register_blueprint($index_bp);
$app->register_blueprint($fruits_bp);

/* Running our app */
$app->run(true);
