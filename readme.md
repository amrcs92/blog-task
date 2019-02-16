<h2 align="center">Simple CRUD blog</h2>

## About this web application

This simple blog like any blog website, nothing fancy, this blog have 2 different user role:

-User (user can read all posts and select post's category that is created by admin) user_role = 1

-Admin (admin can create/read/update/delete posts & categories) user_role = 2 

## Developed by

Technologies used in this project laravel 5.5, bootstrap 3.7
Laravel features used: Eloquent, Query builder, migration, routing , auth,  middleware, helper

## Database tables

Database: blogtask

Tables:

- users (id, username, email, password, remember_token, created_at, updated_at, role_id)

- roles (id, name)

- posts (id, title, description, created_at, updated_at, category_id)

- categories (id, name, created_at, updated_at)

## Relationships used

- hasmany()

- hasOne()


## Helper

helpers.php

helper function for getting all categories, and show it in menu bar

## Routes used

- GET

- POST

- PATCH

- DELETE 

## Installation steps

1) npm install

2) composer install

3) make sure .env file exist in the project 
   copy the .env-example and change:
   - username, password, databasename

4) php artisan migrate

## Extra Installation

make sure to create user & admin by registeration to use the laravel authentication system
hint: for admin you need to edit user_role column value in users table from "1" to "2"

Enjoy!! :)
