<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookchigo - Your Reimagined Bookstore</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
 <style>
    :root {
    --primary-color: #FF6B6B;
    --secondary-color: #4ECDC4;
    --accent-color: #45B7D1;
    --text-color: #2C3E50;
    --background-color: #F7F9FC;
    --white: #FFFFFF;
    --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    background-color: var(--background-color);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: var(--white);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    transition: var(--transition);
}

header.scrolled {
    background-color: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.logo {
    display: flex;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
}

.logo svg {
    width: 30px;
    height: 30px;
    margin-right: 10px;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 30px;
}

nav ul li a {
    text-decoration: none;
    color: var(--text-color);
    font-weight: 600;
    transition: var(--transition);
    position: relative;
}

nav ul li a::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: var(--primary-color);
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
}

nav ul li a:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

#menu-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
}

#menu-toggle span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: var(--text-color);
    margin: 5px 0;
    transition: var(--transition);
}

main {
    padding-top: 80px;
}

#hero {
    background: linear-gradient(135deg, var(--secondary-color) 0%, var(--accent-color) 100%);
    color: var(--white);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}

#hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="0.5" stroke-opacity="0.1"/></svg>');
    background-size: 20px 20px;
    transform: rotate(30deg);
    opacity: 0.5;
}

.hero-content {
    max-width: 600px;
    position: relative;
    z-index: 1;
}

h1 {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    margin-bottom: 20px;
    line-height: 1.2;
}

.highlight {
    position: relative;
    display: inline-block;
}

.highlight::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 5px;
    width: 100%;
    height: 15px;
    background-color: rgba(255, 255, 255, 0.3);
    z-index: -1;
    transform: skew(-10deg);
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: all 0.6s;
}

.btn:hover::before {
    left: 100%;
}

.btn-primary {
    background-color: var(--primary-color);
    color: var(--white);
}

.btn-secondary {
    background-color: transparent;
    color: var(--white);
    border: 2px solid var(--white);
}

.hero-image {
    position: absolute;
    right: -100px;
    bottom: -50px;
    width: 600px;
    height: 400px;
    transform: rotate(-5deg);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.hero-image:hover {
    transform: rotate(0deg) scale(1.05);
}

.hero-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

#problem-solution {
    background-color: var(--white);
    padding: 100px 0;
}

h2 {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
}

h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background-color: var(--primary-color);
}

.section-description {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 50px;
    font-size: 1.1rem;
}

.comparison {
    display: flex;
    justify-content: space-between;
    gap: 40px;
}

.comparison-item {
    flex: 1;
    background-color: var(--background-color);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.comparison-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.comparison-item h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: var(--primary-color);
}

.comparison-item ul {
    list-style-type: none;
}

.comparison-item ul li {
    margin-bottom: 10px;
    padding-left: 30px;
    position: relative;
}

.comparison-item ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--secondary-color);
    font-weight: bold;
}

#features {
    padding: 100px 0;
    background-color: var(--background-color);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
}

.feature-item {
    background-color: var(--white);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.feature-content {
    display: flex;
    height: 100%;
}

.feature-image {
    flex: 1;
    overflow: hidden;
}

.feature-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.feature-item:hover .feature-image img {
    transform: scale(1.1);
}

.feature-text {
    flex: 1;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.feature-text h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--primary-color);
}

#video {
    background-color: var(--secondary-color);
    color: var(--white);
    padding: 100px 0;
}

.video-wrapper {
    display: flex;
    align-items: center;
    gap: 40px;
}

.video-container {
    flex: 1;
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

.video-description {
    flex: 1;
}

.video-description h3 {
    font-size: 2rem;
    margin-bottom: 20px;
}

#why-use {
    padding: 100px 0;
    background-color: var(--white);
}

.reasons-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.reason-item {
    background-color: var(--background-color);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: flex-start;
    transition: var(--transition);
}

.reason-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.reason-item svg {
    width: 30px;
    height: 30px;
    margin-right: 15px;
    flex-shrink: 0;
    fill: var(--primary-color);
}

.cta-container {
    text-align: center;
}

footer {
    background-color: var(--text-color);
    color: var(--white);
    padding: 60px 0 30px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-section h3, .footer-section h4 {
    margin-bottom: 20px;
    color: var(--primary-color);
}

.footer-section ul {
    list-style-type: none;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: var(--white);
    text-decoration: none;
    transition: var(--transition);
}

.footer-section ul li a:hover {
    color: var(--primary-color);
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-links a {
    display: inline-block;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
}

.social-links a:hover {
    background-color: var(--primary-color);
}

.social-links svg {
    width: 20px;
    height: 20px;
    fill: var(--white);
}

.copyright {
    text-align: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

@media (max-width: 768px) {
    header nav {
        display: none;
    }

    #menu-toggle {
        display: block;
    }

    .hero-content {
        text-align: center;
    }

    .cta-buttons {
        justify-content: center;
    }

    .hero-image {
        position: static;
        width: 100%;
        height: auto;
        transform: none;
        margin-top: 40px;
    }

    .comparison {
        flex-direction: column;
    }

    .video-wrapper {
        flex-direction: column;
    }

    .video-container {
        margin-bottom: 30px;
    }
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0px);
    }
}

.feature-item {
    animation: float 4s ease-in-out infinite;
}

.feature-item:nth-child(2) {
    animation-delay: 0.5s;
}

.feature-item:nth-child(3) {
    animation-delay: 1s;
}


 </style>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 19.5C4 18.837 4.26339 18.2011 4.73223 17.7322C5.20107 17.2634 5.83696 17 6.5 17H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.5 2H20V22H6.5C5.83696 22 5.20107 21.7366 4.73223 21.2678C4.26339 20.7989 4 20.163 4 19.5V4.5C4 3.83696 4.26339 3.20107 4.73223 2.73223C5.20107 2.26339 5.83696 2 6.5 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Bookchigo</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#problem-solution">Our Solution</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#video">How It Works</a></li>
                    <li><a href="#why-use">Why Bookchigo</a></li>
                </ul>
            </nav>
            <button id="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        <section id="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Your Bookstore, <span class="highlight">Reimagined</span></h1>
                    <p>Discover a new way to buy books. Per piece, per kilo, or in bundles - your choice, your convenience.</p>
                    <div class="cta-buttons">
                        <a href="#" class="btn btn-primary">Start Reading</a>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="images/bookchigo-showcase.jpg" alt="Bookchigo App Showcase" width="600" height="400">
                </div>
            </div>
        </section>

        <section id="problem-solution">
            <div class="container">
                <h2>Revolutionizing Book Shopping</h2>
                <p class="section-description">Bookchigo Online Bookstore showcases a practical, trustworthy, and helpful system for both businesses and customers. Our platform eliminates the need to visit physical stores, allowing customers to purchase their favorite books, including novels and educational materials, from the comfort of their homes.</p>
                <div class="comparison">
                    <div class="comparison-item">
                        <h3>Traditional Bookstores</h3>
                        <ul>
                            <li>Limited operating hours</li>
                            <li>Physical travel required</li>
                            <li>Restricted inventory</li>
                            <li>One-size-fits-all pricing</li>
                        </ul>
                    </div>
                    <div class="comparison-item">
                        <h3>Bookchigo Solution</h3>
                        <ul>
                            <li>24/7 availability</li>
                            <li>Shop from anywhere</li>
                            <li>Vast digital inventory</li>
                            <li>Flexible pricing options</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <h2>Innovative Features for Book Lovers</h2>
                <div id="features-container" class="features-grid">
                    <!-- Features will be dynamically inserted here -->
                </div>
            </div>
        </section>

        <section id="video">
            <div class="container">
                <h2>See Bookchigo in Action</h2>
                <div class="video-wrapper">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Bookchigo App Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-description">
                        <h3>Discover the Bookchigo Experience</h3>
                        <p>Watch our video to see how easy it is to find, purchase, and enjoy books with Bookchigo. Our unique features and user-friendly platform make book shopping a delightful adventure.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-use">
            <div class="container">
                <h2>Why Choose Bookchigo?</h2>
                <div id="reasons-container" class="reasons-grid">
                    <!-- Reasons will be dynamically inserted here -->
                </div>
                <div class="cta-container">
                    <a href="#" class="btn btn-primary">Join Bookchigo Today</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Bookchigo</h3>
                    <p>Revolutionizing the way you discover and enjoy books.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#problem-solution">Our Solution</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#video">How It Works</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Returns Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23 3C22.0424 3.67548 20.9821 4.19210 19.86 4.53C19.2577 3.83751 18.4573 3.34668 17.567 3.12391C16.6767 2.90115 15.7395 2.95718 14.8821 3.28444C14.0247 3.61170 13.2884 4.19439 12.773 4.95372C12.2575 5.71305 11.9877 6.61232 12 7.53V8.53C10.2426 8.57557 8.50127 8.18581 6.93101 7.39545C5.36074 6.60508 4.01032 5.43864 3 4C3 4 -1 13 8 17C5.94053 18.398 3.48716 19.0989 1 19C10 24 21 19 21 7.5C20.9991 7.22145 20.9723 6.94359 20.92 6.67C21.9406 5.66349 22.6608 4.39271 23 3V3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 11.37C16.1234 12.2022 15.9813 13.0522 15.5938 13.799C15.2063 14.5458 14.5931 15.1514 13.8416 15.5297C13.0901 15.9079 12.2384 16.0396 11.4078 15.9059C10.5771 15.7723 9.80976 15.3801 9.21484 14.7852C8.61992 14.1902 8.22773 13.4229 8.09406 12.5922C7.9604 11.7615 8.09206 10.9099 8.47032 10.1584C8.84858 9.40685 9.45418 8.79374 10.201 8.40624C10.9478 8.01874 11.7978 7.87658 12.63 8C13.4789 8.12588 14.2649 8.52146 14.8717 9.12831C15.4785 9.73515 15.8741 10.5211 16 11.37Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 6.5H17.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Bookchigo Online Bookstore. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js">
        document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('nav');

    // Header scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            nav.classList.remove('active');
            menuToggle.classList.remove('active');

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Fetch and display features
    fetch('data/features.json')
        .then(response => response.json())
        .then(features => {
            const featuresContainer = document.getElementById('features-container');
            features.forEach(feature => {
                const featureElement = createFeatureElement(feature);
                featuresContainer.appendChild(featureElement);
            });
        })
        .catch(error => console.error('Error loading features:', error));

    // Display reasons
    const reasons = [
        "Convenience: Shop for books anytime, anywhere",
        "Unique Pricing: Choose between per piece, per kilo, or bundle options",
        "Vast Selection: Access a wide range of books across various genres",
        "User-Friendly: Intuitive interface for seamless browsing and purchasing",
        "Personalized Recommendations: Discover new books tailored to your interests",
        "Secure Transactions: Safe and reliable payment processing",
        "Fast Delivery: Get your books delivered right to your doorstep",
        "Community: Connect with fellow book lovers and share recommendations"
    ];

    const reasonsContainer = document.getElementById('reasons-container');
    reasons.forEach(reason => {
        const reasonElement = createReasonElement(reason);
        reasonsContainer.appendChild(reasonElement);
    });

    // Intersection Observer for fade-in animation
    const fadeElements = document.querySelectorAll('.fade-in');
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    fadeElements.forEach(element => fadeObserver.observe(element));
});

function createFeatureElement(feature) {
    const featureDiv = document.createElement('div');
    featureDiv.className = 'feature-item fade-in';
    featureDiv.innerHTML = `
        <div class="feature-content">
            <div class="feature-image">
                <img src="${feature.imageSrc}" alt="${feature.title}">
            </div>
            <div class="feature-text">
                <h3>${feature.title}</h3>
                <p>${feature.description}</p>
            </div>
        </div>
    `;
    return featureDiv;
}

function createReasonElement(reason) {
    const reasonDiv = document.createElement('div');
    reasonDiv.className = 'reason-item fade-in';
    reasonDiv.innerHTML = `
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p>${reason}</p>
    `;
    return reasonDiv;
}

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const heroImage = document.querySelector('.hero-image');
    const scrollPosition = window.pageYOffset;
    heroImage.style.transform = `translateY(${scrollPosition * 0.5}px)`;
});

// Animated counter for problem-solution section
function animateCounter(element, target, duration) {
    let start = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
        start += increment;
        element.textContent = Math.floor(start);
        if (start >= target) {
            clearInterval(timer);
            element.textContent = target;
        }
    }, 16);
}

const counterElements = document.querySelectorAll('.counter');
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const target = parseInt(entry.target.getAttribute('data-target'));
            animateCounter(entry.target, target, 2000);
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

counterElements.forEach(element => counterObserver.observe(element));

    </script>
</body>
</html>

