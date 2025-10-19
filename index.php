<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anas Abdul'salam Ahmed | Remote IT & Flutter Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container nav-container">
            <div class="logo">Anas<span>.</span></div>
            <nav class="main-nav" aria-label="Primary">
                <button class="menu-toggle" aria-expanded="false" aria-controls="nav-list">
                    <span></span><span></span><span></span>
                </button>
                <ul id="nav-list">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero" class="hero section">
            <div class="container hero-grid">
                <div class="hero-text fade-in">
                    <p class="eyebrow">Remote IT &amp; Flutter Developer</p>
                    <h1>Hi, I'm <span>Anas Abdul'salam Ahmed</span></h1>
                    <p class="lead">
                        I craft mobile and web experiences that put people first. With a passion for Flutter, PHP, and seamless digital operations,
                        I help teams launch modern products from anywhere in the world.
                    </p>
                    <div class="cta-group">
                        <a class="btn primary" href="#contact">Let's collaborate</a>
                        <a class="btn ghost" href="https://linkedin.com/in/anas-abdulsalam-99628b376" target="_blank" rel="noopener">LinkedIn Profile</a>
                    </div>
                    <ul class="contact-inline">
                        <li><a href="mailto:anasalkiiing222@gmail.com">anasalkiiing222@gmail.com</a></li>
                        <li><a href="tel:+967773572752">+967 773 572 752</a></li>
                        <li><a href="https://linkedin.com/in/anas-abdulsalam-99628b376" target="_blank" rel="noopener">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="hero-visual fade-in delay-2">
                    <div class="orb"></div>
                    <img src="assets/img/w1.jpg" alt="An abstract creative workspace" loading="lazy">
                </div>
            </div>
        </section>

        <section id="about" class="section accent">
            <div class="container split">
                <div class="section-title">
                    <h2>About</h2>
                    <p>Professional Summary</p>
                </div>
                <div class="section-content fade-in">
                    <p>
                        A results-driven IT graduate (Sep 2025) skilled in mobile app development with Flutter, API integrations, data handling,
                        and remote collaboration. I thrive on designing user-centric solutions, managing digital content, and bringing
                        creativity to every project I join.
                    </p>
                    <p>
                        Whether building a secure ticket booking platform, orchestrating content strategies, or delivering polished UI/UX,
                        I adapt quickly and ensure every detail aligns with the bigger vision.
                    </p>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="container">
                <div class="section-title center">
                    <h2>Skills</h2>
                    <p>Technical expertise and interpersonal strengths</p>
                </div>
                <div class="skills-grid fade-in">
                    <article class="card">
                        <h3>Technical Skills</h3>
                        <ul>
                            <li>Flutter &amp; Dart mobile development</li>
                            <li>PHP, MySQL, HTML, CSS</li>
                            <li>REST API integration &amp; backend communication</li>
                            <li>UI/UX wireframing &amp; responsive design</li>
                            <li>SQL data handling &amp; analysis</li>
                            <li>Microsoft Office &amp; Google Workspace</li>
                        </ul>
                    </article>
                    <article class="card">
                        <h3>Soft Skills</h3>
                        <ul>
                            <li>Effective communication &amp; email etiquette</li>
                            <li>Remote teamwork and coordination</li>
                            <li>Time management &amp; prioritization</li>
                            <li>Creative problem-solving</li>
                            <li>Attention to detail and digital literacy</li>
                            <li>Adaptability to new tools</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="experience" class="section accent">
            <div class="container">
                <div class="section-title center">
                    <h2>Experience</h2>
                    <p>Highlights from my professional journey</p>
                </div>
                <div class="timeline fade-in">
                    <article class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Social Media Manager</h3>
                            <p class="meta">Sanaa Al-Ghad Private School</p>
                            <ul>
                                <li>Designed, published, and maintained daily content for school platforms.</li>
                                <li>Increased reach and engagement with targeted, data-informed campaigns.</li>
                                <li>Delivered creative visuals aligned with educational goals.</li>
                            </ul>
                        </div>
                    </article>
                    <article class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Freelance Flutter Developer</h3>
                            <p class="meta">Graduation Project &mdash; Intercity Bus Ticket Booking App</p>
                            <ul>
                                <li>Built a complete ticket booking system with Flutter and PHP backend.</li>
                                <li>Designed dashboards, OTP-secured login, and multi-role access.</li>
                                <li>Ensured responsive UX and real-time data integration.</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="education" class="section">
            <div class="container split">
                <div class="section-title">
                    <h2>Education</h2>
                    <p>Academic background</p>
                </div>
                <div class="section-content fade-in">
                    <article class="card">
                        <h3>Bachelor of Information Technology</h3>
                        <p class="meta">Saeed University &mdash; Expected Graduation: September 2025</p>
                        <p>Graduation Project: Intercity Bus Ticket Booking App (Flutter, PHP, MySQL)</p>
                    </article>
                    <article class="card">
                        <h3>Certifications &amp; Training</h3>
                        <ul>
                            <li>ICDL &mdash; International Computer Driving License (Excellent 91.57%)</li>
                            <li>Secretarial Diploma &mdash; Center for American Studies (Excellent 92.29%)</li>
                            <li>Think Outside the Box &mdash; Digital Marketing &amp; eCommerce</li>
                            <li>Human Development &amp; Productivity Certificate</li>
                            <li>YouTube Courses: Flutter (Wael Abu Hamza), Web Dev (Elzero School)</li>
                        </ul>
                    </article>
                    <article class="card">
                        <h3>Languages</h3>
                        <ul>
                            <li>Arabic &mdash; Native</li>
                            <li>English &mdash; Intermediate (Reading, Writing, Speaking)</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="section contact">
            <div class="container">
                <div class="section-title center">
                    <h2>Let's Build Something</h2>
                    <p>Send a message and I'll get back to you shortly.</p>
                </div>
                <div class="contact-grid fade-in">
                    <div class="card info">
                        <h3>Contact Details</h3>
                        <ul>
                            <li><strong>Email:</strong> <a href="mailto:anasalkiiing222@gmail.com">anasalkiiing222@gmail.com</a></li>
                            <li><strong>Phone:</strong> <a href="tel:+967773572752">+967 773 572 752</a></li>
                            <li><strong>WhatsApp:</strong> <a href="https://wa.me/967735727752" target="_blank" rel="noopener">+967 735 727 752</a></li>
                            <li><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/anas-abdulsalam-99628b376" target="_blank" rel="noopener">anas-abdulsalam</a></li>
                            <li><strong>Address:</strong> Al-Sagheerin Street, Ash Shawm‘ah, Al Bayda, Yemen</li>
                        </ul>
                        <div class="badge-grid">
                            <span class="badge">Remote Ready</span>
                            <span class="badge">Detail-Oriented</span>
                            <span class="badge">Bilingual</span>
                        </div>
                    </div>
                    <form class="card form" id="contact-form" method="post" action="contact.php">
                        <div class="form-field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-field">
                            <label for="company">Company / Organization</label>
                            <input type="text" id="company" name="company">
                        </div>
                        <div class="form-field">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn primary full">Send Message</button>
                        <p class="form-response" role="status" aria-live="polite"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Anas Abdul'salam Ahmed. Crafted with passion and precision.</p>
            <p class="locale">متاح للعمل عن بُعد &mdash; Ready for remote collaboration</p>
        </div>
    </footer>

    <script src="assets/js/main.js" defer></script>
</body>
</html>
