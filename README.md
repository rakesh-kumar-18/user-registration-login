# User Registration and Login System

This project demonstrates a simple user registration and login system using PHP and MySQLi. It allows users to register with their information and log in to access a dashboard.

## Project Structure

The project consists of the following files and directories:

- `css/`: Contains the CSS file for styling the HTML forms.
- `includes/`: Contains the configuration file for database connection.
- `index.php`: User registration form.
- `register.php`: Handles user registration.
- `login.php`: User login form.
- `authenticate.php`: Validates user login credentials.
- `dashboard.php`: User dashboard page.
- `.gitignore`: Specifies files to ignore in version control.
- `README.md`: Project documentation.

## Getting Started

1. **Prerequisites:** Make sure you have PHP and MySQL installed on your system.

2. **Installation:**

   - Download or clone this repository to your local machine.
   - If using XAMPP or a similar package, copy the project directory to your web server's document root.
   - If setting up manually, configure your web server (Apache) to serve the project directory.

3. **Database Configuration:**

   - Create a MySQL database named `user_registration`.
   - Import the database structure using the provided SQL statements:
      ```bash
      CREATE TABLE users (
          id INT AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(255) NOT NULL,
          email VARCHAR(255) NOT NULL,
          password VARCHAR(255) NOT NULL,
          address VARCHAR(255) NOT NULL,
          phone VARCHAR(20) NOT NULL
      );
      ```

4. **Configure Database Connection:**

   - Create `includes/config.php` file in root directory.
   - Update the database configuration with your MySQL host, username, password, and database name.
   - Your `includes/config.php` file should look like below:
     ```bash
     <?php
      return [
          'host' => 'localhost',
          'username' => 'root',
          'password' => 'root',
          'database' => 'user_registration'
      ];
      ?>
     ```

5. **Access the Project:**

   - Open a web browser and navigate to the registration page: `http://localhost/user-registration/index.php`.

6. **Usage:**

   - Register a new user by filling out the registration form.
   - Log in with the registered email and password on the login page.
   - Upon successful login, you will be redirected to the dashboard.
