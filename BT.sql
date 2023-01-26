CREATE DATABASE expenses;
USE expenses;

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    expense_name VARCHAR(255) NOT NULL,
    expense_amount DECIMAL(10, 2) NOT NULL,
    expense_date DATE NOT NULL,
    currency VARCHAR(3) NOT NULL