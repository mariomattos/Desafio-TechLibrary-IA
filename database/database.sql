CREATE DATABASE IF NOT EXISTS techlibrary_db;
USE techlibrary_db;

CREATE TABLE IF NOT EXISTS books (
	id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publication_year INT NOT NULL,
    status VARCHAR(43) DEFAULT 'disponível',
    registration_date DATETIME DEFAULT CURRENT_TIMESTAMP
);