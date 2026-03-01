# Blood Connect 
A full-stack web application designed to streamline the blood donation process by bringing blood donors, recipients, blood banks, and blood donation camps onto a single platform. The application features an admin panel that allows administrators to manage blood banks, blood donation camps, donors, and blood inventory effectively. The backend is developed using **PHP** and **MySQL**, while the frontend is built with **HTML**, **CSS**, and **JavaScript**. The application is deployed on **InfinityFree**.

# Project Structure
```
Blood-Connect/
│
├── admin/                     # Admin panel pages (dashboard, management features)
├── css/                       # Stylesheets (CSS files for UI design)
├── images/                    # Images used in the project (icons, banners, templates)
├── includes/                  # Common includes (header/footer, reusable components)
├── js/                        # JavaScript scripts for frontend interactivity
├── webfonts/                  # Font files used in UI
│
├── about.php                 # About page describing the project
├── blood_banks.php           # To add blood banks
├── blood_camp.php            # To add blood camp details
├── certificate.php           # Generates donation certificates
├── change-password.php       # Allows users to change password
├── contact-blood.php         # Contact form for blood-related queries
├── contact.php               # General contact page
├── db_connect.php           # Database connection setup (PHP)
├── database.sql             # SQL file to create the required database and tables
├── donor-list.php           # Shows list of registered donors
├── index.php                # Home page of the application
├── login.php                # Login page for users and admin
├── logout.php               # Logout script
├── profile.php              # Profile page for logged-in users
├── request-received.php     # Shows blood requests received by user/admin
├── search-donor.php         # Donor search logic
├── search_blood_banks.php   # Search blood banks
├── search_blood_camps.php   # Search camps
├── sign-up.php              # Sign-up / registration page for new users
├── view_blood_banks.php     # View details of all blood banks
└── view_blood_camps.php     # View all registered blood camps
```
# Features
- User Features

    - User registration and login system

    - Secure user authentication and logout
    
    - User profile management
    
    - Change password functionality
    
    - View list of registered blood donors
    
    - Search blood donors based on blood group and location

    - add blood banks

    - View blood bank details
    
    - Search blood banks

    - add blood camps

    - View blood donation camp details
    
    - Search blood donation camps
    
    - Submit and view blood requests
    
    - Contact form for blood-related queries
    
    - General contact form for user support
    
    - Blood donation certificate generation

- Admin Panel Features

    - Admin login and dashboard
    
    - Add, update, and manage blood donor records
    
    - Add, update, and manage blood bank details
    
    - Add, update, and manage blood donation camp details
    
    - View and manage blood requests
    
    - Centralized management of system data

- System Features

    - Location-based search functionality
    
    - Centralized database for donors, banks, and camps
    
    - Structured and reusable components for consistent UI
    
    - Responsive web interface
# Prerequisites

Before setting up the project, ensure the following requirements are met:

- **Web Server (Apache)** – Required to run PHP files.
- **PHP (7.x or above)** – Used for backend logic, authentication, and database operations.
- **MySQL** – Used to store and manage application data.
- **Web Browser** – To access and test the application.
- **Text Editor / IDE** – To view and edit the source code.
### Optional (For Local Development)
- **XAMPP / WAMP / MAMP** – Provides Apache, PHP, and MySQL together.
- **phpMyAdmin** – Used to import and manage the database.
# Setup
1. Clone the repository:

   ```bash
   git clone https://github.com/Tripura657/Blood-Connect
   ```
2. Move the project folder to the server root directory:

   - For XAMPP: htdocs/

    - For WAMP: www/
3. Create a new database in MySQL.
4. Import the database.sql file into the created database using phpMyAdmin.
5. Configure database credentials in db_connect.php:
     ```
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    ```
6. Start Apache and MySQL services.
7. Open the browser and navigate to:
    ```
    http://localhost/Blood-Connect/
    ```
