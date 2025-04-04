# Login-Register-Page
I built a registration and login page using Apache2 and MariaDB. Users sign up with a username, email, and password, stored securely. The login page verifies credentials. PHP handles form submissions, while Apache2 serves the frontend and MariaDB manages user data.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------

# Login-Register-Page instructions

This project is an experiment using Apache2 as a web server and MariaDB as a database on a Linux operating system. The goal is to create a simple user management system with a registration and login feature.

🛠 Installation Steps
To set up the environment, install the necessary packages:

sh
sudo apt update && sudo apt upgrade -y
sudo apt install apache2 mariadb-server php php-mysql -y
After installation, enable and start the services:

sh
sudo systemctl enable apache2 mariadb
sudo systemctl start apache2 mariadb
📌 Database Setup
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
This setup ensures that user authentication data is stored efficiently. 🚀
