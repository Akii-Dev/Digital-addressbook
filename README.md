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
5. Generate Tailwindcss:
```
$ npm run dev
```
6. Run project:
```
$ php artisan serve
```

## Images
![users](https://github.com/Akii-Dev/Digital-addressbook/blob/main/public/images/users.png?raw=true)
![user info](https://github.com/Akii-Dev/Digital-addressbook/blob/main/public/images/userinfo.png?raw=true)
![post info](https://github.com/Akii-Dev/Digital-addressbook/blob/main/public/images/postinfo.png?raw=true)
