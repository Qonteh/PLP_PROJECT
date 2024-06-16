GAC Company

Welcome to GAC Company! This project showcases a website for a real estate company specializing in apartment rentals. Users can explore listings, learn about the company, and contact them easily.

Table of Contents

⦁	Introduction

⦁	Features

⦁	Technologies Used

⦁	Installation

⦁	Usage

⦁	Contributing

⦁	License

Introduction


GAC Company is dedicated to helping users find their dream apartments through a user-friendly website. It includes features such as:

⦁	Homepage: Introduction to the company and featured apartments.

⦁	Listings Page: Detailed view of available apartments.

⦁	About Us Page: Information about the company and its team.

⦁	Contact Us Page: Form for users to reach out for inquiries and bookings.
Features

⦁	Responsive design using Tailwind CSS.

⦁	Dynamic content loading from a MySQL database.

⦁	Booking form integration with PHP for apartment reservations.

⦁	Contact form for user inquiries and messages.

⦁	Technologies Used

⦁	Frontend: HTML, CSS (Tailwind CSS), JavaScript (Alpine.js)

⦁	Backend: PHP

⦁	Database: MySQL


Installation

Clone the repository:
bash
Copy code
git clone https://github.com/Qonteh/PLP_PROJECT.git
Import the database schema located in database.sql into your MySQL database:

bash
Copy code
mysql -u username -p database_name < database.sql
Configure your database connection in config.php:

php
Copy code
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "BOOKINGdb";
Start a local server (e.g., using PHP's built-in server):

bash
Copy code
php -S localhost:8000
Open your web browser and visit http://localhost:8000 to view the website.

Usage
Navigate through the website using the navigation links.
Explore apartment listings and click on "Details" for more information.
Use the booking form to reserve an apartment.
Contact the company via the contact form for inquiries.
Contributing
Contributions are welcome! If you have any ideas, improvements, or issues, feel free to open a pull request or raise an issue.

License
This project is licensed under the MIT License - see the LICENSE file for details.
