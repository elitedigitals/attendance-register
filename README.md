Attendance Register System (PHP & PDO MySQL)
Project Overview

The Attendance Register System is a web-based application built using PHP, PDO, and MySQL that allows administrators to manage employee records and track daily attendance.
Admins can create, update, delete employees, record attendance, and export attendance reports in multiple formats.

Features
👤 Employee Management

Create new employee records

Update employee details

Delete employee records

View all employees

🕒 Attendance Management

Mark employee attendance (Present / Absent)

View attendance records by date or employee

Maintain historical attendance data

📊 Admin Controls

Export attendance records in multiple formats:

CSV

Excel

PDF

View all employee attendance records

Manage employee status

🛠️ Technologies Used

Backend: PHP (PDO)

Database: MySQL

Frontend: HTML, CSS, Bootstrap

Server: Apache (XAMPP)



🗄️ Database Structure

employees Table
Column Name	Type	Description
id	INT	Primary Key
name	VARCHAR(100)	Employee Name
email	VARCHAR(100)	Employee Email
department	VARCHAR(100)	Department Name
created_at	TIMESTAMP	Record Created


attendance Table
Column Name	Type	Description
id	INT	Primary Key
employee_id	INT	Foreign Key
date	DATE	Attendance Date
status	ENUM	Present / Absent
created_at	TIMESTAMP	Record Created


⚙️ Installation & Setup

Clone or Download the Project

git clone https://github.com/yourusername/attendance-register.git


Move Project to Server Directory

XAMPP: htdocs/

WAMP: www/

Create Database

Open phpMyAdmin

Create a database (e.g., attendance_db)

Import database.sql

Configure Database Connection

Update config/database.php:

$host = "localhost";
$db   = "attendance_db";
$user = "root";
$pass = "";


Run the Application

http://localhost/attendance-register/

📤 Export Attendance Records

Admins can export attendance data in:

CSV

Excel

PDF

Exports can be filtered by:

Date

Employee

Department

🔐 Security Features

PDO prepared statements (SQL Injection protection)

Input validation and sanitization

Role-based access (Admin only features)

📌 Future Improvements

Login & authentication system

Role-based permissions

Monthly attendance reports

Dashboard with charts

Employee self-attendance view

📄 License

This project is open-source and free to use for educational and personal projects.
