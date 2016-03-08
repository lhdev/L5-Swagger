![](https://lithiumhosting.com/images/logo_new_black.png)

## L5-Swagger
**from Lithium Hosting**  
We're always open to pull requests, feel free to make this your own or help us make it better.

### Copyright
(c) Lithium Hosting, llc

### License
This library is licensed under the MIT license; you can find a full copy of the license itself in the file /LICENSE  
Inspired by [Jordan Lapp's Swaggervel](https://github.com/slampenny/Swaggervel)!

### Requirements
* PHP 5.5.9 or newer
* Laravel 5.2

### Description
This package combines [Swagger-php](https://github.com/zircote/swagger-php) and [swagger-ui](https://github.com/swagger-api/swagger-ui) into one Laravel-friendly package.  
When you run your app in debug mode, L5-Swagger will scan your app folder (or any folder that is set under the "app-dir" variable in the packages config), generate swagger json files and deposit them to the doc-dir folder (default is `/docs`). Files are then served by swagger-ui under the api-docs directory.  

### Installation
Installation is easy, just add `"lithiumdev/l5-swagger": "~1.0"` to your composer.json and then run composer update  
You can also just type `composer require lithiumdev/l5-swagger:~1.0`.  

After the composer install finishes, register the service provider and publish the assets:

* Add `LithiumDev\Swagger\SwaggerServiceProvider::class,` to your providers array in `app/config/app.php` above your route provider, to avoid any catch-all routes
* Run `php artisan vendor:publish --provider="LithiumDev\Swagger\SwaggerServiceProvider"` to publish required resources.

### Usage
Two routes are available, one serves the swagger JSON file and the other displays Swagger-UI

* www.example.com/docs - This is the swagger JSON route
* www.example.com/api/docs - This route serves up the Swagger-UI

You can manaully generate the swagger json file by running the following command:  
`./vendor/bin/swagger app/ -o storage/docs/api-docs.json`

More to come...