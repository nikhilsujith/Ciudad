<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About The Project

This is a project for the Web Data Management Course CSE 5335 at UTA under Dr. Elizabeth Diaz. 

<b>Tools Used</b>
- HTML 5
- CSS3
- Vanilla JS
- Laravel 
- MySql
- Currently hosted on Heroku at http://wdm-laravel.herokuapp.com/
- Heroku hosting uses postgresql

<b> Required Steps after Clone </b> 
<br><i>You will need to have installed Laravel beforehand -- please go to https://laravel.com/docs/7.x/installation for more instructions</i>
1. run <b>'composer install'</b> on terminal / command prompt
2. run <b>'php artisan generate:key'</b> to generate an app key 
3. make a <b>.env file</b> at directory root and update DB connection credentials. [use .env.exanple as a template]
4. update <b>db credentials under app > config > database.php</b>
5. run <b>'php aritsan migrate'</b> to migrate all db tables
6. <i>to run the project</i> <b>'php artisan serve'</b>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
