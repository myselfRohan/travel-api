# Travel Agency API

Travel Agency API developed using [Laravel](https://laravel.com).

####Development Setup Guide

- Clone the project

- Run the "composer install" command inside the project directory.

- Make the .env file by copying the .env.example file.
  ```bash
		cp .env.example .env
  ```
- Generate the unique application key in .env.  
	```bash
		php artisan key:generate
	```
- Migrate the tables. 
	```bash
		php artisan migrate

- Seed the tables. 
	```bash
		php artisan db:seed

Happy Coding !!!
