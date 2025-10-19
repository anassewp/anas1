# Anas Abdul'salam Ahmed – Personal Portfolio

A bilingual, animated portfolio website for remote IT and Flutter developer Anas Abdul'salam Ahmed. The site is built with semantic HTML, modern CSS, vanilla JavaScript, and a lightweight PHP backend for contact form submissions stored in MySQL.

## Features

- Elegant hero section with smooth animations and responsive navigation
- Detailed sections for summary, skills, professional experience, education, certifications, and languages (English and Arabic cues)
- Contact section with live form validation feedback and database persistence
- Intersection Observer-powered reveal animations and mobile-friendly layout
- Easily configurable database connection via environment variables or `config.php`

## Project Structure

```
.
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   │   └── [...branding imagery]
│   └── js/
│       └── main.js
├── config.php
├── contact.php
├── database/
│   └── schema.sql
├── index.php
└── README.md
```

## Getting Started

### XAMPP on Windows (recommended by Anas)

1. **Copy the project**
   - Extract or move the project folder into `C:\xampp\htdocs\anas-portfolio` (or any name you prefer).

2. **Start the services**
   - Launch the XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Create the database with phpMyAdmin**
   - Visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a new database named `anas_portfolio` (or another name of your choice).
   - With the database selected, go to the **Import** tab and upload `database/schema.sql` to create the `messages` table automatically.

4. **Configure credentials (if needed)**
   - The default XAMPP credentials are already in `config.php` (`root` user with no password, port `3306`, host `127.0.0.1`).
   - If you changed the database name or set a MySQL password, update the `$database` array in `config.php` to match.

5. **Open the site**
   - Navigate to [http://localhost/anas-portfolio](http://localhost/anas-portfolio) (replace with the folder name you used).
   - Submit the contact form to confirm messages are being saved to the database.

### Alternative CLI setup

1. Install PHP 8+, MySQL 5.7+/MariaDB 10+, and a web server (Apache/Nginx) or use the PHP built-in server.
2. Create the database via terminal: `mysql -u root -p < database/schema.sql`.
3. Configure credentials via environment variables (`DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`, optionally `DB_PORT`/`DB_SOCKET`) or by editing `config.php`.
4. Serve the site locally with `php -S localhost:8000` and open [http://localhost:8000](http://localhost:8000).

### Deploying

- Ensure `config.php` or environment variables match your production database.
- Secure `contact.php` behind HTTPS and optionally add spam protection (reCAPTCHA, rate limiting).

## Customization Tips

- Replace images in `assets/img/` with personal photography or branding.
- Adjust colors and typography in `assets/css/style.css` to match your identity.
- Extend `contact.php` to send email notifications in addition to storing messages.
- Translate section headings or add an Arabic content toggle using the same layout.

---
Crafted with ❤️ to showcase Anas' remote-ready expertise.
