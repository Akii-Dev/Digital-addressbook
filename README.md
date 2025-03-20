# Addressbook

A small site showing an overview of users without any hardcoded data.

This project was primarily made to experiment with foreign keys.


## Requirements


XAMPP (or another SQL admin tool)

Composer

# Installation
1. Clone the repository
2. Install composer in the root:

```
$ composer install
```
3. Generate env file

4. Create database and migrations:
```
$ php artisan migrate:refresh --seed
```
6. Generate Tailwindcss:
```
$ npm run dev
```
7. Run project:
```
$ php artisan serve
```

## Images
![alt text](public\images\users.png)
![alt text](public\images\userinfo.png)
![alt text](public\images\postinfo.png)