-- Create a new database named 'TeamDB'
CREATE DATABASE IF NOT EXISTS TeamDB;

-- Use the created database
USE TeamDB;

-- Create a new table named 'TeamMembers'
CREATE TABLE IF NOT EXISTS TeamMembers (
    ID INT PRIMARY KEY,
    Name VARCHAR(50),
    Age INT,
    CGPA DECIMAL(3, 2)
);

-- Insert 5 students into the 'TeamMembers' table
INSERT INTO TeamMembers (ID, Name, Age, CGPA)
VALUES 
    (22011940, 'Mazen Mohamed Nasr', 21, 2.9),
    (22011556, 'Saif Eldeen Faiz Belal', 19, 2.2),
    (22011663, 'Moataz Mohamed Abdelhamid Ansary', 20, 3.1),
    (22011635, 'Youssef Mohamed Abdelmageed Elgamal', 20, 3.4),
    (22010415, 'Youssef Mohamed Ahmed Morsi', 20, 3.4)
