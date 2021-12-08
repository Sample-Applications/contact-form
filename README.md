# Contact Form
Contact Form - My First Laravel Package

# Tutorial
https://pusher.com/tutorials/publish-laravel-packagist/

## Installation
Open your project in terminal and run the following command:<br><br>
*composer require kenprogrammer/contactform*

Add the service provider in your *config/app.php* file:
```
'providers' => [
    // ...
    Kenprogrammer\Contactform\ContactFormServiceProvider::class,
];
```
- Create your database and update .env with your databaser/server credentials accordingly
- Run migration *php artisan migrate*
## Usage
- Run server *php artisan serve*
- Visit http://localhost/contact

