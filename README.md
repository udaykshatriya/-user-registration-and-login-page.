# -user-registration-and-login-page.
User Registration and Login System with PHP and MySQL

Description:
This project implements a simple user registration and login system using PHP and MySQL. It allows new users to register by providing their name, email, password, address, and phone number. After registration, users can log in using their email and password. Upon successful login, users are redirected to a welcome page where they are greeted with their name.

Features:

User Registration: New users can register by providing their name, email, password, address, and phone number through the registration form.
Password Hashing: User passwords are hashed using PHP's password_hash() function before storing them in the database, ensuring security.
User Login: Registered users can log in using their email and password through the login form.
Session Management: PHP sessions are used to keep track of logged-in users across multiple pages.
Database Interaction: User data is stored in a MySQL database. The system interacts with the database for user registration, login, and fetching user details.
Responsive UI: The user interface is designed to be responsive, ensuring a consistent experience across different devices and screen sizes.
Error Handling: Proper error messages are displayed to users in case of invalid login attempts or registration errors.
Database Querying: SQL queries are used to insert new user records during registration and retrieve user records during login.
Technologies Used:

HTML: For creating the user interface and forms.
CSS: For styling the web pages and making them visually appealing.
PHP: For server-side scripting to handle user registration, login, session management, and database interactions.
MySQL: For creating and managing the database to store user information securely.
Purpose:
The purpose of this project is to demonstrate the implementation of a basic user registration and login system using PHP and MySQL. It serves as a foundation for building more complex authentication systems and web applications that require user management functionality. This project can be further extended and customized with additional features such as email verification, password reset, user roles, and profile management.




