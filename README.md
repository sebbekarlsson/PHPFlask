# Flask for PHP!

## Supports:
* Blueprints
* Function routes

## About
> The goal of this project is to be able to write
> flask-like applications in PHP.

## Blueprint example:

        class FruitsBP extends Blueprint {
            var $fruits;
            
            function __construct() {
                $this->route('/fruits', 'main');
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


