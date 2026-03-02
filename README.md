# Company Inventory Management System

A simple PHP & MySQL based Inventory Management System that allows a company to manage products and allows buyers to view available products.

---

## 📌 Project Overview

This project is a basic web-based inventory system built using:

- PHP (Backend logic)
- MySQL (Database)
- HTML & CSS (Frontend)

The system allows:

- Adding products to inventory
- Viewing available products
- Deleting products by ID
- Navigating between Company and Buyer views

It is designed as a beginner-friendly CRUD (Create, Read, Delete) web application.

---

## 🛠️ Technologies Used

- PHP (Procedural)
- MySQL
- HTML5
- CSS3
- XAMPP / WAMP (Local Server)

---

## 🗄️ Database Setup

### 1️⃣ Create Database

Open phpMyAdmin and run:

```sql
CREATE DATABASE company;
USE company;

CREATE TABLE inventory (
    id VARCHAR(50) PRIMARY KEY,
    item VARCHAR(255) NOT NULL,
    category VARCHAR(255),
    price DECIMAL(10,2),
    availability INT
);

```
## How to Run the Project (XAMPP)
1. Install XAMPP

2. Start:
   - Apache
   - MySQL

3. Copy the project folder into:
   ```
   htdocs/
   ```
   Example:
   ```
   C:\xampp\htdocs\Company
   ```
    
4. Open browser and go to:
   ```
    http://localhost/Company/home.php
   ```
