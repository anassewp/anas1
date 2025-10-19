const menuToggle = document.querySelector('.menu-toggle');
const navList = document.querySelector('#nav-list');

if (menuToggle && navList) {
    menuToggle.addEventListener('click', () => {
        const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!expanded));
        navList.classList.toggle('open');
        document.body.classList.toggle('nav-open');
    });

    navList.querySelectorAll('a').forEach((link) =>
        link.addEventListener('click', () => {
            menuToggle.setAttribute('aria-expanded', 'false');
            navList.classList.remove('open');
            document.body.classList.remove('nav-open');
        })
    );
}

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        const targetId = anchor.getAttribute('href');
        const target = document.querySelector(targetId);
        if (target) {
            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.15,
    }
);

document.querySelectorAll('.fade-in').forEach((element) => observer.observe(element));

const contactForm = document.querySelector('#contact-form');
const responseElement = contactForm?.querySelector('.form-response');

if (contactForm && responseElement) {
    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        responseElement.textContent = 'Sending...';
        responseElement.className = 'form-response pending';

        const formData = new FormData(contactForm);

        try {
            const result = await fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            });

            const data = await result.json();

            if (!result.ok || data.status !== 'success') {
                throw new Error(data.message || 'Unable to submit your message.');
            }

            responseElement.textContent = data.message;
            responseElement.className = 'form-response success';
            contactForm.reset();
        } catch (error) {
            responseElement.textContent = error.message;
            responseElement.className = 'form-response error';
        }
    });
}
