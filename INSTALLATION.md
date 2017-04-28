# Installing PHPFlask on Debian

* [1] [Install Nginx and PHP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-debian-8)
* [2] [Install composer](https://getcomposer.org/download/)
* [3] Copy the `phpflask.nginx` located in this repository to `/etc/nginx/sites-available`
* [4] Modify the `phpflask.nginx` to your needs.
* [5] Symlink the nginx configuration file like below:

        ln -s /etc/nginx/sites-available/phpflask.nginx /etc/nginx/sites-enabled/.

* [6] Restart Nginx:

        systemctl restart nginx

* [7] Install PHPFlask in your project:

        cd /var/www/<your-project>
        composer install sebbekarlsson/php-flask

* [8] Load the composer autoloader into your project

        require_once 'vendor/autoload.php'

* [9] Rock and roll!

> And no, I will not write instructions for `Apache`,
> `Apache` is crap and no one should use it.
