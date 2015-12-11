# Senior e-Learning Platform Project (SEPP)

[![Latest Stable Version](https://poser.pugx.org/e-LearningSenior/e-LearningSenior/version)](https://packagist.org/packages/e-LearningSenior/e-LearningSenior) [![Latest Unstable Version](https://poser.pugx.org/e-LearningSenior/e-LearningSenior/v/unstable)](//packagist.org/packages/e-LearningSenior/e-LearningSenior) [![Total Downloads](https://poser.pugx.org/e-LearningSenior/e-LearningSenior/downloads)](https://packagist.org/packages/e-LearningSenior/e-LearningSenior)

This project aims to create an Online Learning for Elderly Platform using [Laravel PHP Framework](http://laravel.com/) under the [User Centered Design](https://fenix.tecnico.ulisboa.pt/cursos/meic-a/disciplina-curricular/283003985068057) class at [Instituto Superior Técnico](http://tecnico.ulisboa.pt/), [Universidade de Lisboa](http://www.ulisboa.pt/) - Portugal.

## [Laravel PHP Framework](http://laravel.com/)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Information

* [Demo](http://esenior.calli.tech/)
* [Laravel](http://laravel.com)

### Requirement

* Apache Web Server
* PHP 5.3.2 or above
* MySQL

## Installation

#### How to run the final prototype:

1. ```composer dumpautoload```

2. ```composer update```

3. ```composer install```

4. ```touch storage/database.sqlite```

5. ```php artisan migrate```

6. ```php artisan serve```

> (OPTIONAL)

7. Update database configuration based on you MySQL configuration in `database.php`:

		'mysql' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'howframework_laravel',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
		),

8. Run `php artisan migrate:install` to run migration table installation.
9. Run `php artisan migrate` to update you're database to latest migration.

## Running the Application

You can access the application from http://localhost/PROJECTNAME/public/, change `localhost/` to whatever you set in your environment.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).
