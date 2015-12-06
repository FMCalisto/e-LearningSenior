# Senior e-Learning Platform Project (SEPP)

This project aims to create an Online Learning for Elderly Platform under the [User Centered Design](https://fenix.tecnico.ulisboa.pt/cursos/meic-a/disciplina-curricular/283003985068057) class at [Instituto Superior Técnico](http://tecnico.ulisboa.pt/), [Universidade de Lisboa](http://www.ulisboa.pt/) - Portugal.



How to run the final prototype:

composer dumpautoload
composer update
composer install
touch storage/database.sqlite
php artisan migrate
php artisan serve