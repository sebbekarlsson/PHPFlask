# Flask for PHP!

## Supports:
* Blueprints
* Function routes
* Jinja-like templating (Using Twig)

## Requirements:
* PHP 5.6 and above
* Composer

## About
> The goal of this project is to be able to write
> flask-like applications in PHP.

## Installation
> Clone down the repository inside your project
> (preferably as a submodule)

> And then:

        cd PHPFlask/
        composer install

> And then in your project:

        require_once('PHPFlask/src/index.php');

## Installing with composer
> You can also install using composer:

        composer install sebbekarlsson/php-flask

## Full installation guide
> Still clueless?

> [Read the full installation guide](INSTALLATION.md)

## Blueprint example:

        class FruitsBP extends Blueprint {
            var $fruits;
            
            function __construct() {
                parent::__construct();

                $this->base_url = '/fruits';

                $this->route('/', 'main');
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

            function main() {
                return json_encode($this->fruits);
            }
        }
        
> And then registering it:
        
        $app->register_blueprint(new FruitsBP());
        
 
## Function example:

        $app->route('/fruits', function() {
            return json_encode([
                'apple',
                'banana',
                'raspberry',
                'papaya',
                'orange'
            ]); 
        });

