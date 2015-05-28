#Backpacker.io - Traveller's app

REST API for travellers
Scraping the web to retrieve information about transportation, housing, tips and tricks 

Basic REST functionality for now! More code to come!
Tests are not yet implemented! Sorry :D

## Usage

### Requirements
PHP v5.4.0 or highrt
MongoDB >= 2.6 or higher
MCrypt PHP Extension


Use MongoDB for storage, and still Eloquent for ORM:
  - Eloquent for MongoDB : ([Laravel MongoDB]) You can easily use MongoDB (NoSQL) as well as the basic SQL database managed by Laravel (MySQL, PGSQL, SQLite, SQL server). Everything is already configured!
  - Seeder files (js) to set up MongoDB users

Send custom response messages:
   - ApiResponse (extends Illuminate\Support\Facades\Response) to quickly send json encoded response message, with adapted Http status codes, and even failed validation rules

Multi-device session:
   - Token : allow a user to login from multiple devices and track all his active sessions.

Social media login:
   - single config file: *app/config/social.php*
   - [Facebook] Authentication (sdk v4): Wrapper class to easily connect and retrieve info

Reset Password:
  - a simple and safe flow to reset a password with single-use short-lived token. No captcha, no personal question.


## Installation

Use Composer to install dependencies
`cd my_api
composer install --dev
`

## Set-up project key
php artisan key:generate

## Set-up the database and config files
> you have the choice between SQL databases (mysql and sqlite) or MongoDB

configue your database in app/config/database.php

Simply run the migration in app/database/migrations using 
	`php artisan migrate`


