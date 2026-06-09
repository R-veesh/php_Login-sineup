# PHP Login & Signup System

A simple login and signup system built with PHP and MySQL. Users can create an account, log in, and see a personalized welcome message on the homepage. Built for learning purposes — demonstrates session management, password hashing, and basic form validation.

## Features

- User registration with validation (username rules, email format, password matching)
- Secure password storage using `password_hash()` (bcrypt)
- User login with `password_verify()`
- Session-based authentication
- Logout functionality
- Responsive design with custom CSS

## Screenshots

| Homepage | Sign Up |
|---|---|
| ![Homepage](ScreenShot/Screenshot%202026-06-08%20155445.png) | ![Sign Up](ScreenShot/Screenshot%202026-06-09%20182446.png) |

| Log In | Logged In |
|---|---|
| ![Log In](ScreenShot/Screenshot%202026-06-09%20182453.png) | ![Logged In](ScreenShot/Screenshot%202026-06-09%20182408.png) |

## Project Structure

```
├── css/
│   └── style.css             # Stylesheet
├── includes/
│   ├── dbh.inc.php            # Database connection
│   ├── functions.inc.php      # Validation & auth logic
│   ├── login.inc.php          # Login form handler
│   ├── logout.inc.php         # Logout handler
│   └── signup.inc.php         # Signup form handler
├── ScreenShot/                # Screenshots
├── footer.php                 # Footer template
├── header.php                 # Header / navbar template
├── index.php                  # Homepage
├── login.php                  # Login page
└── signup.php                 # Signup page
```

## Requirements

- PHP 7.4+
- MySQL / MariaDB
- XAMPP (or any Apache + PHP + MySQL stack)

## Setup

1. **Clone the repository** into your web server directory (e.g., `htdocs` for XAMPP):
   ```bash
   git clone https://github.com/R-veesh/php_Login-sineup.git
   ```

2. **Start Apache and MySQL** via XAMPP control panel.

3. **Create the database** — open phpMyAdmin (http://localhost/phpmyadmin) and run:
   ```sql
   CREATE DATABASE IF NOT EXISTS php_login_signup;
   USE php_login_signup;

   CREATE TABLE users (
       usersId INT AUTO_INCREMENT PRIMARY KEY,
       usersName VARCHAR(255) NOT NULL,
       usersEmail VARCHAR(255) NOT NULL,
       usersUid VARCHAR(255) NOT NULL,
       usersPassword VARCHAR(255) NOT NULL,
       UNIQUE KEY unique_uid (usersUid),
       UNIQUE KEY unique_email (usersEmail)
   );
   ```

4. **Configure database** (optional) — edit `includes/dbh.inc.php` if your MySQL credentials differ from the defaults:
   ```php
   $serverName = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "php_login_signup";
   ```

5. **Open the app** in your browser:
   ```
   http://localhost/php_Login&sineup/
   ```

## Usage

- Go to **Sign Up** to create a new account
- Log in with your username/email and password
- Once logged in, you'll see a welcome message on the homepage
- Use **Log Out** to end your session

## Tutorial

This project was built following a PHP login/signup tutorial. Check out similar tutorials on YouTube or PHP documentation for more details.

## License

MIT
