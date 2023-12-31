# Attendance Marker

The Attendance Marker is a web-based system for marking attendance online, utilizing IP addresses to prevent proxy attempts. It requires a basic understanding of internet protocols, PHP for building the interface, and a MySQL database for verifying class codes and storing attendance data.

## Theory

### IP Address

An IP address is a unique identifier for a device on the internet or a local network. It plays a crucial role in identifying and validating users in the Attendance Marker system.

### PHP

PHP is a scripting language used for web development. It is used in this project to capture IP addresses and mark attendance based on user input.

### MySQL

MySQL is an open-source relational database management system. It is employed to store student details along with their corresponding IP addresses for attendance tracking.

## Steps

1. Verify the class using a class code in the format XYZ01 - XYZ08.
2. Save the student's name, student ID, and IP address in the MySQL database.
3. Extract and display the attendance data from the database.
4. To prevent proxy attempts, the system checks if the user's IP address already exists in the database.

## Code

- `index.php` contains the HTML and PHP code for the class verification interface.
- `action.php` processes the form submission and inserts the data into the MySQL database.
- `connect.php` establishes the connection to the MySQL database.
- `success.php` displays a success message and retrieves and displays the attendance data from the database.
- `style.css` provides styling for the web pages.

Please note that the code provided is only a part of the overall system and may require additional components and configurations to run successfully.

Feel free to modify and enhance the code to suit your specific needs.

## Prerequisites

- Basic understanding of internet protocols
- PHP installed
- MySQL database set up

## Installation

1. Clone or download the source code.
2. Configure the database connection settings in `connect.php`.
3. Set up the necessary tables in the MySQL database.
4. Deploy the application on a web server with PHP support.

## Usage

1. Access the application through a web browser.
2. Enter the class code to verify the class.
3. Fill out the required information to mark attendance.
4. View the attendance records on the success page.

## Security

- The system uses IP address validation to prevent proxy attempts.
- Ensure proper security measures are in place to protect the server, database, and user data.
