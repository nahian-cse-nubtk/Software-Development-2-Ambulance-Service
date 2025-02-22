**AmbulanceService Management System for Khulna**

A web-based ambulance service management system built usingPHP Laravel. This system aims to streamline and automate ambulance services inKhulna, ensuring faster response times, better management of requests, and moreefficient resource allocation.

**Features**

*   **User Registration**: Secure user registration for ambulance service requests.
    

*   **Ambulance Request System**: Allows users to request ambulances based on their location and needs.
    

*   **Ambulance Management**: Admins can manage the available ambulances, assign ambulances to requests, and track their status.
    

*   **Reports**: Generate reports on service usage, requests, and ambulance availability.
    

**Tech Stack**

*   **Backend**: PHP, Laravel
    

*   **Frontend**: Blade Templates (Laravel's templating engine) + Tailwind css and raw css
    

*   **Database**: MySQL (or any compatible relational database)
    

*   **Authentication**: Will be added soon.
    

*   **API Integration**: Will be added soon.
    

**Prerequisites**

Before begin, have to ensure the following things are installedon the local development environment:

*   PHP (>= 7.4)
    

*   Composer (for managing PHP dependencies)
    

*   Laravel (recommended: latest stable version)
    

*   MySQL or other supported database
    

**Installation**

**1\. Clone the repository:**

OpenCommand Prompt

Type:

gitclone Url

**2\. Install dependencies:**

Run the following command to install Laravel dependencies:

bash

Copy

composerinstall

**3\. Set up the environment file:**

Copy the .env.example file to .env:

bash

Copy

cp.env.example .env

Then, open the .env file and configure the following settings:

*   **Database Connection**: Set the DB\_\* variables to match your local or production database credentials.
    

**4\. Generate application key:**

bash

Copy

phpartisan key:generate

**5\. Migrate the database:**

Run the following command to set up the database tables:

bash

Copy

phpartisan migrate

If you want to seed the database with sample data:

bash

Copy

phpartisan db:seed

**6\. Install front-end dependencies:**

Have to run for front-end assets (e.g., CSS, JS):

bash

Copy

npminstall

npmrun dev

**7\. Serve the application:**

Run the Laravel development server:

bash

Copy

phpartisan serve

The application should now be accessible at http://127.0.0.1:8000.

**Usage**

2.  **Register**: Users can register or request for an ambulance services.
    

4.  **Request Ambulance**: Users can request an ambulance by providing details such as location, medical emergency type, etc.
    

**License**

This project is open-source and available under the MITLicense.

**Contributing**

If you'd like to contribute to this project, please fork therepository and submit a pull request with your changes. Make sure to followthese steps:

2.  Fork the repository.
    

4.  Create a new branch.
    

6.  Make your changes.
    

8.  Commit your changes.
    

10.  Push to your branch .
    

12.  Open a pull request.
    

**Contact**

For any inquiries or support, please contact:

*   **Email**: sheikhalnahian@gmail.com
    

*   **GitHub**: http://github.com/nahian-cse-nubtk
    

**Acknowledgments**

*   Laravel ([https://laravel.com](https://laravel.com))
    

*   MySQL ([https://www.mysql.com](https://www.mysql.com))
    

*   Tailwindcss[(https://www.tailwindcss.com)]((https:/www.tailwindcss.com))
    

*   Fontawesome(https://fontawesome.com)