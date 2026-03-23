# 🦠 COVID-19 Information Dashboard

> **A full-stack tracking and statistical dashboard for COVID-19 patient data, built with PHP, MySQL, and Docker.**

---

## 🚀 Overview
The **COVID-19 Information System** is a responsive web application that tracks, filters, and visualizes patient statistics. It features a public-facing dashboard with rich data charts and a secure, session-based Administrative panel for managing patient records via robust CRUD operations. 

This project was built to demonstrate proficiency in server-side scripting, relational databases, data visualization, and modern DevOps containerization.

## 💻 Tech Stack

*   **Backend:** PHP 8.x (Procedural)
*   **Database:** MySQL / MariaDB (via `mysqli` extension)
*   **Infrastructure:** Docker & Docker Compose
*   **Frontend UI:** HTML5, CSS3, JavaScript
*   **Styling & Layout:** Bootstrap 
*   **Data Visualization:** ApexCharts.js
*   **Data Processing UI:** DataTables (for advanced client-side filtering, sorting, and pagination)
*   **Interactive Components:** SweetAlert, FontAwesome

## ✨ Key Features
*   **Public Data Dashboard:** View live patient statistics in clean, sortable data grids.
*   **Advanced Data Filtering:** Instantly search by Age, Nationality, State, Gender, and Status using DataTables.
*   **Statistical Charts:** Interactive data visualization powered by ApexCharts.
*   **Admin Control Panel:** Custom-built admin portal for managing the database safely.
*   **Complete CRUD Functionality:** Admins can securely insert, edit, delete, and manage cases.
*   **Docker Containerization:** Seamless local setup with dynamic environment-variable database connections.

---

## 🛠️ Local Development Setup

### Option 1: Docker (Recommended)
You can run this project instantly if you have Docker Desktop installed.

1. Clone the repository: `git clone https://github.com/Hiremorshadul/Covid19InformationSystem.git`
2. Open your terminal in the root directory
3. Run the container:
   ```bash
   docker-compose up -d
   ```
4. Visit `http://localhost:8000`

### Option 2: XAMPP / WAMP
1. Clone the repository into your XAMPP `htdocs` (or WAMP `www`) directory.
2. Start **Apache** and **MySQL** from your control panel.
3. Open `phpMyAdmin` and create a database named `filter_system`.
4. Import the provided `database.sql` file to seed the database and tables.
5. Visit the project folder in your browser, e.g., `http://localhost/Covid19InformationSystem`.

## 🔒 Admin Access
To test the administration CRUD tools, navigate to `/admin/login.php` and use the following seeded credentials:

*   **Username:** `admin`
*   **Password:** `admin`