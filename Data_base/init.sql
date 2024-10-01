-- Create the database 'mydb' if it does not already exist
CREATE DATABASE IF NOT EXISTS mydb;

-- Use the 'mydb' database for subsequent operations
USE mydb;

-- Create the table 'test_table' if it does not already exist
CREATE TABLE IF NOT EXISTS test_table (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Define 'id' as an auto-incrementing primary key
    name VARCHAR(50) NOT NULL            -- Define 'name' as a non-nullable string with a maximum length of 50
);