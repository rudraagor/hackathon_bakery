CREATE DATABASE IF NOT EXISTS `checkout_db`;
USE `checkout_db`;

CREATE TABLE IF NOT EXISTS `orders` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `address` TEXT NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `total_amount` DECIMAL(10, 2) NOT NULL,
    `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
