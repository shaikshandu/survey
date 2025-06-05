CREATE DATABASE house_survey;

USE house_survey;
CREATE TABLE responses1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender VARCHAR(10),
    aadhaar VARCHAR(12),
    phone VARCHAR(10),
    house_type ENUM('Own', 'Rent') NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
