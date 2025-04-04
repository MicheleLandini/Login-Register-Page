# Login-Register-Page
I built a registration and login page using Apache2 and MariaDB. Users sign up with a username, email, and password, stored securely. The login page verifies credentials. PHP handles form submissions, while Apache2 serves the frontend and MariaDB manages user data.
![image alt](https://github.com/MicheleLandini/Login-Register-Page/blob/ce0b1fcfdbeb916648d1b67675ae935a1d82ee14/vindicta.jpg)
-----------------------------------------------------------------------------------------------------------------------------------------------------------------

# Login-Register-Page instructions

This project is an experiment using Apache2 as a web server and MariaDB as a database on a Linux operating system. The goal is to create a simple user management system with a registration and login feature.
<br><br>
***🛠 Installation Steps***<br>
To set up the environment, install the necessary packages:

sh
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 mariadb-server php php-mysql -y
After installation, enable and start the services:

sh
sudo systemctl enable apache2 mariadb
sudo systemctl start apache2 mariadb
<br><br>
***📌 Database Setup*** <br>
I created a MariaDB database called "vindicta", with a "users" table that includes the following fields:

email (NOT NULL)

password (NOT NULL)

nome_utente (NOT NULL) (which means "username" in English)

foto (optional)

To create the database and table, run these SQL commands in MariaDB:

sql
Copia
Modifica
CREATE DATABASE vindicta;
USE vindicta;

CREATE TABLE users (
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nome_utente VARCHAR(100) NOT NULL,
    foto TEXT
);
<br><br>
***🔑 Configuring the Database Connection***<br>
In the config.php file, make sure to set the correct MariaDB password that you created during installation. Modify the $password variable accordingly:

php
Copia
Modifica
$host = "localhost";
$user = "root";
$password = "YOUR_DATABASE_PASSWORD";  // Replace with your MariaDB root password
$dbname = "vindicta";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

This setup ensures that user authentication data is stored efficiently. 🚀
