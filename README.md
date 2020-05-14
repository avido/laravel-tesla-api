# Laravel Tesla API Client

Laravel Package for interacting with Tesla API.

Easy read of car states and sending commands.


## Basic example

```php
$response = TeslaApi::getVehicles();
var_dump($response);
```

## Installation
You can install this package using composer.
```
composer require avido/laravel-tesla-api
```

## Publish config file
```
php artisan vendor:publish
```
## Configuration 
Add your email/password to `config/tesla-api-client` or 
Add your credentials to your `.env` file 

```
TESLA_API_EMAIL=<your email>
TESLA_API_PASSWORD=<your password>
```
