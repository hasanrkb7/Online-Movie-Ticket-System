# Online Movie Ticket System

This is a movie ticket booking website in PHP and MySQL. I made it for the CSE470 Software Engineering course at BRAC University in December 2021.

## Features

- Browse movies, pick one of the 3 theaters and book a ticket. The bookings are saved in the `booking_details` table.
- Admin login with sessions.
- Admin pages to add movies and cinema halls, and to list and delete movies.

## What is inside

The code is in `Model`, `View` and `Controller` folders under `MVC Structure/`:

- `Controller/`: booking and the 3 theater pages
- `Model/`: admin login, database access and the admin data pages
- `View/`: the public pages
- `Model/online_booking_ticket.sql`: the database schema and sample data

## How to run

Step 1: Install XAMPP (Apache, PHP and MySQL).

Step 2: Copy the project into `htdocs`.

Step 3: In phpMyAdmin, create a database called `online_booking_ticket` and import `MVC Structure/Model/online_booking_ticket.sql`.

Step 4: Open the site in the browser through `localhost`.

The database login is `root` with no password, which is the XAMPP default. The admin passwords are saved as MD5 hashes. It was fine for a course demo, but it is not safe for a real site.
