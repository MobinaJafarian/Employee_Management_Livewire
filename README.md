# Employee Management with Livewire
Employee Management

## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Screenshots](#screenshots)
* [Setup](#setup)
* [Contact](#contact)


## General Information
Employee Management Application using Livewire


## Technologies Used
- PHP      8.1.10
- Laravel  10.1.5
- livewire 2.11


## Features
- Employee Management
    - list of employees with search.
    - filter by employee name and department.
    - create , update & delete employees.
- System Management
    - country
    - state
    - city
    - department
- User Management
- Authentication


## Screenshots
![Register Page screenshot](./public/images/screenshots/Screenshot%20%20Register.png)

![Employees Page screenshot](./public/images/screenshots/Screenshot%20%20Dashboard-employees.png)

![Country Page screenshot](./public/images/screenshots/Screenshot%20Dashboard-country.png)

![Users Page screenshot](./public/images/screenshots/Screenshot%20Dashboard-users.png)



## Setup

```
git clone https://github.com/MobinaJafarian/EmployeeManagement.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
then

```
php artisan serve
npm install && npm run dev
```





## Contact
Created by [@MobinaJafarian](https://github.com/MobinaJafarian) - feel free to contact me!
