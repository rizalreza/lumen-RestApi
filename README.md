## About

**REST API** using [Lumen](https://lumen.laravel.com/docs/5.5) micro-framework. Possible to make Create, Update, and Delete call. With Eloquent ORM feature to help to communicate mysql database related operation.


## How to use

**Clone repo**

	git clone https://github.com/rizalreza/lumen-RestApi.git

**Install the composer dependencies**
 
 	composer install

**Database Configuration**

	* Create new database
	* Edit credentials database on .env file
		DB_DATABASENAME=
		DB_USERNAME=
		DB_PASSWORD=

**Migrate**

	php artisan migrate

**URL**



| 		URL         | HTTP Method |               Operation                |
|:-----------------:| :---------: |:--------------------------------------:|
| /api/pegawai      |  GET 	      | Returns an array of **Pegawai**        |
| /api/pegawai/:id  |  GET        | Returns the **Pegawai** with id of :id |
| /api/pegawai      |  POST       | Adds a new **Pegawai** and return it   |
| /api/pegawai/:id  |  PUT        | Updates the **Pegawai** with id of :id |
| /api/pegawai/:id  |  DELETE     | Deletes the **Pegawai** with id of :id |

