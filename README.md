# OneMarket

Web application for managing quotes, work sheets, clients, products, and administrators. The project was developed in PHP and JavaScript as part of the Professional Aptitude Project (PAP) for the Computer Programmer course.

## Features

- **Dashboard:** overview of earnings, project progress, recent actions, and out-of-stock products.
- **Work sheets:** creation, editing, deletion, history, printing, and photo galleries by section.
- **Quotes:** creation, editing, deletion, history, and printing of detailed quotes.
- **Products:** stock management, product creation, editing, and deactivation.
- **Clients:** client creation, editing, and deactivation.
- **Administration:** administrator and permission management, and log viewing.
- **Profile:** viewing and editing the authenticated administrator's profile.

## Technologies

- PHP 7.4 or later
- MySQL
- HTML5 and CSS3
- JavaScript

## Requirements

- PHP with the `mysqli` and `gd` extensions enabled
- MySQL 5.7+ or an equivalent MariaDB version
- Web server (Apache, Nginx, or PHP's development server)
- `onemarket` database with the application's schema

## Installation

1. Clone or copy the project to the web server's public directory.
2. Create a MySQL database and import the application's schema.
3. Copy `.env.example` to `.env` and fill in the credentials:

   ```env
   DB_HOST=localhost
   DB_PORT=3306
   DB_NAME=onemarket
   DB_USER=root
   DB_PASSWORD=
   ```

   The `.env` file is local and must not be shared or committed to version control.

4. Ensure that the `images/uploads/` directory has write permissions; it is used to store images uploaded by the application.
5. Start the local server from the project root:

   ```bash
   php -S localhost:8000
   ```

6. Open [http://localhost:8000](http://localhost:8000) and sign in with an administrator already registered in the database.

## Configuration

The MySQL connection is configured in `db/conexao.php` through the `.env` variables. If the file does not exist, the default local values are used (`localhost`, `onemarket` database, `root` user, and an empty password).

## Main structure

```text
.
├── db/                 # Database connection and shared functions
├── css/                # Stylesheets
├── images/             # Application images and uploads
├── *.php               # Pages, forms, and JSON endpoints
├── .env.example        # Local configuration template
└── README.md
```

## Security

- Never publish `.env` or real credentials.
- Use a strong password for the MySQL user in non-local environments.
- Make regular backups of the database and the `images/uploads/` directory.
