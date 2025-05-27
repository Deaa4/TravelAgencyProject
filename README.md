PHASE 1
Team Members:
•	Dea Kamolli – dkamolli22@epoka.edu.al 	
•	Uendi Hasanbelli – uhasanbelli22@epoka.edu.al 
•	Kejsi Bardhi – kbardhi22@epoka.edu.al 
•	Elefteria Kolagji – ekolagji22@epoka.edu.al 
•	Redisa Domi – rdomi22@epoka.edu.al 
•	Danja Senja – dsenja22@epoka.edu.al 

Lecturers:
•	Dr. Aida Dhima
•	M. Sc. Mohammad Ziyad Kagdi

Project Details:
Our Travel Agency Website is a PHP and MySQL-based project designed to provide users with an interactive platform for exploring tourism packages, making inquiries, and managing content through an admin dashboard. The website ensures a user-friendly experience while maintaining dynamic content retrieval and database integration.
This document outlines the main components, team responsibilities, and functionality of the website, explaining how different modules work together.

Project Title: Travel Agency Website
        
Problem Statement:
Many small tourism agencies lack a robust online platform to showcase their services, handle user inquiries, and manage dynamic content. As a result, agencies struggle to reach a wider audience, provide up-to-date information, and effectively compete in the rapidly growing travel market.

Solution Proposed:
Our proposed solution is a feature-rich, PHP-and-MySQL-based tourism website. It provides an intuitive interface for customers to browse travel packages, submit inquiries, and view category-based services. An admin panel allows authorized personnel to update packages, manage categories, and monitor user inquiries in real-time.

Project Scope:
Aim: To build a comprehensive, user-friendly platform that seamlessly connects travelers with curated travel packages and services, while enabling the agency to manage content with minimal effort.
Main Objectives:
•	Implement dynamic content retrieval for travel packages, categories, and subcategories.
•	Provide a secure login and dashboard for admin management.
•	Offer an interactive user experience via sliders, search functionality, and user inquiries.
•	Ensure responsive design and accessibility for diverse devices and users.
•	Maintain database efficiency for scalability.

Application Description:
The Travel Agency Website offers an engaging homepage with featured packages, promotional sliders, and category overviews. Users can browse or filter packages, view detailed itineraries, and submit inquiries for more information. An admin dashboard facilitates the addition, deletion, or modification of travel packages and categories in real-time. Features include:
•	Dynamic Homepage: Showcases featured tours and promotional banners.
•	Interactive Slider: Displays images of popular destinations.
•	Category & Subcategory System: Organizes travel packages by region or type.
•	Inquiry Form: Captures user details, interests, and questions, storing them for admin review.
•	Admin Dashboard: Allows administrators to log in securely to manage packages, categories, and user inquiries.
•	Database Integration: Stores package details, categories, user credentials, and inquiries for efficient data retrieval and manipulation.

Roles and Tasks Distribution

Team Leader:
•	Dea Kamolli (Frontend & Quality Assurance)
Creates the homepage layout (index.html), including header, footer, and navigation (top.php).
Works on the design of the website using style.css and improves user interaction.
Tests the website on different browsers and devices to ensure functionality.

Main Roles and Tasks:
•	Uendi Hasanbelli (Backend & Database Management)
Designs the database structure and writes SQL scripts for categories, packages, and inquiries.
Develops backend functionality for login (login.php) and admin dashboard (dashboard.php).
Optimizes backend queries and ensures database performance.

•	Kejsi Bardhi (Content Management & Backend Support)
Populates the database with sample data and manages content updates.
Works on category.php and subcat.php to display main categories dynamically.
Assists in debugging inquiry form issues and optimizing database connections.

•	Elefteria Kolagji (Frontend & Interactive Features)
Develops and integrates slider.php for an interactive homepage.
Designs package.php for displaying tourism packages dynamically.
Works on improving user experience with JavaScript enhancements.

•	Redisa Domi (Inquiry Handling & Backend Support)
Implements form validation and data storage for enquiry.php.
Assists in optimizing database queries and ensuring data security.
Ensures accessibility features like alt tags and keyboard navigation are implemented.

•	Danja Senja (Testing & Debugging)
Verifies that submitted data is securely stored and retrieved.
Fixes issues in dashboard.php, enquiry.php, and other backend scripts.
Conducts final testing and debugging before deployment.

Submission Deadline: 15.03.2025, 23:59 hours.

Repository Link: https://github.com/Deaa4/TravelAgencyProject 


PHASE 2
User Requirements and Application Specifications:

1. Chosen Development Model

Chosen Model: Agile Development
Justification: Agile is chosen due to its flexibility and iterative approach, allowing continuous improvements based on user feedback. Given that the project involves a database-driven application with multiple stakeholders (users, admins, and clients), Agile ensures that evolving requirements can be integrated efficiently without disrupting the overall development process.


2. User Requirements

a. Stakeholders
End-Users: Individuals who browse and inquire about packages. They need a simple and intuitive interface for navigation and inquiries.
Administrators: Manage packages, categories, subcategories, and user inquiries. Their role is to update, modify, and ensure database integrity.
Developers: Responsible for building and maintaining the system, ensuring functionality, security, and performance.
Clients (Businesses): May list their travel packages on the platform, requiring a structured approach to pricing, categorization, and customer interaction.

b. User Stories
	•	User Type: Visitor
Story: 'As a visitor, I want to browse available packages by category and subcategory so that I can quickly find relevant travel options.
Benefit: Enhances user experience and increases engagement.'
	•	User Type: Registered User
Story: 'As a registered user, I want to send inquiries about packages so that I can receive more details from the administrator.
Benefit: Provides a structured way to communicate with the system and receive responses.'
	•	User Type: Administrator
Story: 'As an administrator, I want to manage package details, categories, and inquiries so that the system remains up-to-date.
Benefit: Ensures data consistency and accurate package listings.'


3. Functional Requirements

a. Brief Description
Users should be able to browse packages by category and subcategory.
Users should be able to submit inquiries regarding packages.
Administrators should be able to manage package listings, user inquiries, and categories.
The system should store user inquiries and provide status updates.
User authentication should be implemented for administrators.

b. Acceptance Criteria
Users can successfully search and filter packages.
Inquiry submissions must store user details and package ID in the database.
Administrators can create, update, and delete packages.
A database entry is created when a user submits an inquiry.
Only authenticated administrators can manage the platform.


4. Non-Functional Requirements

a. Brief Description
Performance: The system should load package listings within 2 seconds.
Usability: The interface should be intuitive and accessible to all user types.
Scalability: The system should handle an increasing number of users and package listings.
Security: Data should be encrypted, and user authentication must be implemented.

b. Acceptance Criteria
Page load times should be under 5 seconds for 90% of users.
A usability test should show that 70% of users can navigate without assistance.
The database should support at least 5,000 entries efficiently.
All sensitive data (passwords, emails) should be encrypted using secure hashing techniques.


5. Application Specifications

a. Architecture
The system follows a client-server architecture, where users interact via a web-based interface, and a backend server manages database operations.
The backend connects to a structured relational database to store package details, inquiries, and user information.

b. Database Model
The database includes the following key tables:
  •	Category: Stores main package categories.
	•	Subcategory: Defines subcategories linked to categories.
	•	Package: Stores package details, including price and images.
	•	Users: Manages authentication details for administrators.
	•	Enquiry: Stores user inquiries with status updates.
	•	Contact Us: Stores messages from users.

c. Technologies Used
Backend: PHP or Node.js
Frontend: HTML, CSS, JavaScript (React or Vue.js)
Database: MySQL
Security: bcrypt for password hashing, HTTPS for secure connections

d. User Interface Design
A homepage with a search function for browsing packages.
A package details page displaying images, descriptions, and pricing.
A contact form for inquiries.
An admin panel for managing packages and user inquiries.

e. Security Measures
Authentication: User credentials stored securely with hashed passwords.
Input Validation: Protection against SQL injection and XSS.
Encryption: Sensitive user data is encrypted before storage.
Access Control: Admins have restricted access to critical functionalities.

PHASE 3

The system architecture diagram presents the overall structure of the website. It shows how users interact with the frontend interface, how PHP scripts handle the logic in the backend, and how everything is connected to the MySQL database. This high-level view helps explain the big picture of your application’s workflow.

The component diagram breaks down the system into its main parts, such as the login, enquiry, dashboard, and package modules. It shows how these components communicate with one another and how they rely on shared functions or database access. This type of diagram emphasizes the modularity and organization of the code.

The class diagram visualizes the data model used in your application. It includes representations of entities like users, packages, categories, subcategories, and enquiries. Each class shows its attributes (such as name, email, or price) and the relationships between them. This helps clarify the structure of the data and how different parts of the system relate to each other.

The sequence diagram demonstrates how operations flow during a specific process, such as submitting an enquiry. It illustrates step-by-step interactions between the user, the web interface, the backend code, and the database, helping to show the timeline and logic of user actions in the system.

The use case diagram outlines the functionalities available to different types of users. For example, it shows that normal users can browse packages and send enquiries, while admins can log in, view dashboards, and manage packages. This diagram defines the scope of user interactions within the application.

The activity diagram provides a flowchart-style visualization of how a task is performed, such as booking a package. It includes the steps from selecting a package to filling out the enquiry form and submitting it. This helps explain the logic and decision points in user workflows.

The state diagram shows the different states an enquiry can be in, such as new, pending, or booked. It also describes how it transitions between these states depending on user or admin actions. This is useful for modeling the life cycle of important entities in your system.

The entity-relationship diagram (ERD) represents the structure of your database. It includes tables like category, subcategory, package, enquiry, and users, and shows how they are connected using primary and foreign keys. This diagram is essential for understanding how data is stored and related within the database, forming the backbone of your application’s functionality.

