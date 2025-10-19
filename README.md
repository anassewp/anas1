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

1. **Install dependencies**
   - PHP 8+
   - MySQL 5.7+/MariaDB 10+
   - A web server such as Apache or Nginx, or the PHP built-in development server

2. **Create the database**
   ```bash
   mysql -u root -p < database/schema.sql
   ```

3. **Configure credentials**
   - Option A: Set environment variables `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` before running the site.
   - Option B: Edit the `$database` array inside `config.php` with your credentials.

4. **Run the project locally**
   ```bash
   php -S localhost:8000
   ```
   Open [http://localhost:8000](http://localhost:8000) in your browser.

5. **Deploying**
   - Ensure `config.php` or environment variables match your production database.
   - Secure `contact.php` behind HTTPS and optionally add spam protection (reCAPTCHA, rate limiting).

## Customization Tips

- Replace images in `assets/img/` with personal photography or branding.
- Adjust colors and typography in `assets/css/style.css` to match your identity.
- Extend `contact.php` to send email notifications in addition to storing messages.
- Translate section headings or add an Arabic content toggle using the same layout.

---
Crafted with ❤️ to showcase Anas' remote-ready expertise.
