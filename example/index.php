<?php

require_once '../src/App.class.php';
require_once '../src/Blueprint.class.php';
require_once 'IndexBP.class.php';
require_once 'FruitsBP.class.php';

/* Creating the app */
$app = new App();

/* Blueprints */
$index_bp = new IndexBP();
$fruits_bp = new FruitsBP();

/* Registering our blueprints */
$app->register_blueprint($index_bp);
$app->register_blueprint($fruits_bp);

/* Running our app */
$app->run(true);
