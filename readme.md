# Building an E-commerce platform with Laravel and Vue
This is a demo application showing how to build an e-commerce platform using Laravel and Vue. You can read about how it was created [on Pusher's blog](https://blog.pusher.com/author/neo).

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache.
* A Node Package Manager ( npm or yarn ).

### Install
Clone the git repository on your computer

```$ git clone https://github.com/neoighodaro-articles/e-commerce-laravel-vue.git```


You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies. 

```
$ cd e-commerce-laravel-vue
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`

  ```$ cp .env.example .env```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```

- Install node modules

  ```$ npm install```

- Create Sqlite Database

  ```$ touch database/test.sqlite```

- Copy the `.env.testing.example` file to `.env.testing`

  ```$ cp .env.testing.example .env.testing```

- Migrate and seed the test database

  ```$ php artisan migrate --seed --env=testing```



### Run the application

  ```$ php artisan serve```

### Run php unit test

  ```$ ./vendor/bin/phpunit```


## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces

## Acknowledgments
* [Laravel](https://laravel.com) - The excellent documentation explaining how to get started with Laravel and Laravel Passport made it easy to provide a step by step guide for beginners to follow the application
* [Vue](https://vuejs.org) - Concise documentation 

## DevOps Tools
* Microsft Visual Studio Code
* PHPUnit
* GitHub
* SonarCloud Code Quality Analyzer
* Slack Notifications Integration - Travis CI & Google Cloud Build
* Heroku Deployment Server
* Containerize Technology - Docker
* Google Cloud Platform - Cloud Build, Container Register, GKE
* Infrastructure Monitoring - Google StackDriver
* Application Monitoring - New Relic APM

## Wiki
Documentation: [ecommerce-devops-wiki.pdf](https://github.com/dejongyeong/ecommerce-devops/files/7625853/ecommerce-devops-wiki.pdf) (also available to view on repository)
