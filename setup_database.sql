CREATE DATABASE IF NOT EXISTS ikagengdaycare;

USE ikagengdaycare;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    child_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    parent_name VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL
);
