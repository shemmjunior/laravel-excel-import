## Introduction
This repo performs a functionality of extracting a provided excel file rows and directly inserts the data into mysql database using transaction process together with stored procedures. A simple interface has been built to handle the whole process.

The following is an image describing a flow of how the data is being extracted and stored into mysql database:

![alt text](https://github.com/shemmjunior/ubx-assignment/blob/master/flowchart.png)

## Getting Started

### Installing Development environment
This project has been made using Laravel 9.11. PHP environment is required to run this project. Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

1. Clone the repository from github using `git clone https://github.com/shemmjunior/ubx-assignment.git`
2. Switch to the repository root folder using `cd ubx-assigment`
3. To install project's dependencies run `composer install`
4. Copy the example.env file and make the required configuration changes to .env file
5. Now Generate a new application key `php artisan key:generate` this step is very crucial
6. Run the database migrations, set the database connection in .env before migrating and run `php artisan migrate`
7. You are done! Start the local development server using `php artisan serve` and you should be able to access the server at http://localhost:8000

### Accessing the Web Service
After you have imported an excel sheet, the endpoint can be accessed on `http://localhost:8000/api/cargos`. Below is a snapshot of postman api call.

![alt text](https://github.com/shemmjunior/ubx-assignment/blob/master/api.png)

## Code overview

### Dependencies

- [fast-excel](https://github.com/rap2hpoutre/fast-excel) - For extracting excel sheet rows from an excel file





    
