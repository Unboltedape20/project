**project**

Project for OSSW: Pizza ordering system for pizza shop

# Smokey Oven's pizza 

## Description

This is an assignment project for OSSW module. The project is a pizza ordering system which is implemented using HTML, CSS, PHP, and MariaDB. Customers can place pizza orders, and the system records the orders in a MariaDB database for the pizza employees to use when making the pizza.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Schema](#database-schema)

## Features

- Order pizza with customer name, customer email address, pizza type, and quantity.
- Orders are stored in a MariaDB database.
- Responsive and user-friendly interface.

## Installation

Set up the MariaDB database.

Configure the database connection in process.php. 

Update the following lines with your database credentials:

php

    $conn = new mysqli("localhost", "USERNAME", "DATABASE PASSWORD", "pizza_shop");

    Run the application on a web server.

## Usage

    Open index.html in your web browser or use with Apache web server (localhost)
    
    Put all files in the var/www/html directory in Apache web server.
    
    Fill in the order details and click "Place Order."

    View the thank you page after placing the order.

## Database Schema

| Field          | Type          | Null | Key | Default | Extra          |

| id             | int(11)       | NO   | PRI | NULL    | auto_increment |

| customer_name  | varchar(255)  | NO   |     | NULL    |                |

| pizza_type     | varchar(50)   | NO   |     | NULL    |                |

| quantity       | int(11)       | NO   |     | NULL    |                |

| total_price    | decimal(10,2) | NO   |     | NULL    |                |

| customer_email | varchar(255)  | NO   |     | NULL    |                |


