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
    
    - View blood bank details
    
    - Search blood banks
    
    - View blood donation camp details
    
    - Search blood donation camps
    
    - Submit and view blood requests
    
    - Contact form for blood-related queries
    
    - General contact form for user support
    
    - Blood donation certificate generation

🛠️ Admin Panel Features

Admin login and dashboard

Add, update, and manage blood donor records

Add, update, and manage blood bank details

Add, update, and manage blood donation camp details

View and manage blood requests

Centralized management of system data

🔍 System Features

Location-based search functionality

Centralized database for donors, banks, and camps

Structured and reusable components for consistent UI

Responsive web interface
