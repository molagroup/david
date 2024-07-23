# on-boarding-app-portal
 
How to Run A Lavavel Project Locally


##Mac OS, Ubuntu and Windows users continue here:
* Create a database locally named homestead utf8_general_ci
* Download composer https://getcomposer.org/download/ (if you don't have)
* Pull Laravel/php project from git provider.
* Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
* Open the console and cd your project root directory
* Run composer install or php composer.phar install
* Run php artisan key:generate
* Run php artisan migrate
* Run php artisan db:seed to run seeders, if any.
* Run php artisan serve
#####You can now access your project at localhost:8000 :)
