

## HOW TO CLONE THE PROJECT

Before you start, check that you have composer and apache installed, as this is necessary to make the project work alongside a new, empty database.Steps to follow:

- Clone your project.
- Open terminal in your project and run composer install for install dependencies.
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu.
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
- Run php artisan key:generate.
- Run php artisan migrate.
- Run php artisan serve.
- Go to http://localhost:8000/shopmics/public/comics (IMPORTANT).

## Things to keep in mind

- The compare and insert marvel comics function makes many requests to the marvel api and works with a lot of data, which is a process that takes a while to execute, but if you hit compare and refresh the page, it will stop the process and you will have inserted the comics that you have given time.
