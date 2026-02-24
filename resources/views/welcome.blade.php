<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Blink - Home</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <main class="container">
        <section class="hero" style="background-image: url('{{ asset('images/hero-pineapple.png') }}');">

            <nav class="navbar">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="BLink Logo">
                </div>

                {{-- Navigation --}}
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="active">HOME</a></li>
                    <li><a href="{{ route('about') }}">ABOUT</a></li>
                    <li><a href="{{ route('products') }}">PRODUCTS</a></li>
                    <li><a href="{{ route('testimonials') }}">TESTIMONIALS</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>

                <div class="nav-actions">
                    <a href="#" class="btn-black">GET QUOTE</a>
                </div>
            </nav>

            {{-- Hero buttons --}}
            <div class="hero-overlay">
                <div class="hero-content">
                    <div class="hero-buttons">
                        <a href="#" class="btn-yellow">Explore Products</a>
                        <a href="#" class="btn-outline">Request Quote</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Products Section --}}
        <section class="products-section">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">Discover our range of premium pineapple varieties.</p>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-info">
                        <h3>Fresh Pineapple</h3>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-info">
                        <h3>Pineapple Jam</h3>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-info">
                        <h3>Pineapple Jam</h3>
                    </div>
                </div>
                <div class="product-card view-all-card">
                    <a href="#" class="btn-view-all">View All Products</a>
                </div>
            </div>

            {{-- Services Section --}}
            <div class="services-container">
                <div class="services-left-card">
                    <div class="services-info">
                        <h2 class="title">Our Export Services</h2>
                        <p class="sub-title">From the farms of South Cotabato to the markets of Dubai—we manage the
                            chain so
                            you don't have to.</p>
                    </div>
                </div>
                <div class="services-right-card">
                    <p class="sub-title"></p>
                </div>
            </div>
        </section>

        {{-- Story Section --}}
        <section class="story-container">
            <div class="story-card left-story">
                <div class="story-info">
                    <h2 class="title">Our Story</h2>
                    <p class="sub-title">The Journey of the Perfect MD2 Pineapple, From Our Family to Yours.</p>
                </div>
            </div>
            <div class="story-card right-story">
                <a href="#" class="btn-learn-about">LEARN MORE ABOUT US</a>
            </div>
        </section>

        {{-- Testimonials Seciton --}}
        <section class="testimonials-section">
            <div class="section-title">What our client’s Say</div>
            <div class="section-subtitle">Trusted by businesses across the globe.</div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Al Aweer Market, America</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>

                <div class="testimonial-card">
                    <p>“We’ve worked with several suppliers, but the attention to detail from Blink Philippines
                        regarding grading and packing is unmatched. It makes our job easier knowing the product will
                        arrive in perfect condition.”</p>
                    <div class="client-info">— Fresh Produce Co, Japan</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>

                <div class="testimonial-card">
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Aweer Market, Dubai</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>

                <div class="testimonial-card">
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Aweer Market, Philippines</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>
            </div>
        </section>

        {{-- Contact Section --}}
        <section class="contact-section">
            <div class="contact-header">
                <h2 class="contact-title">Get in Touch</h2>
                <p class="contact-subtitle">Ready to partner with us? Send us a message and we'll get back to you
                    shortly.</p>
            </div>
            <div class="contact-container">
                <form class="contact-form">
                    <div class="form-grid">
                        <div class="form-left">
                            <div class="input-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name">
                            </div>

                            <div class="input-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email">
                            </div>

                            <div class="form-row-inline">
                                <div class="input-group">
                                    <label for="company">Company:</label>
                                    <input type="text" id="company" name="company">
                                </div>
                                <div class="input-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-right">
                            <div class="input-group full-height">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn-send">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-cta">
                <h2 class="footer-heading">Let's Talk</h2>
                <p class="footer-description">Ready to export the finest pineapples? Get in touch with us today.</p>
                <a href="#" class="btn-footer-contact">CONTACT US</a>
            </div>

            <div class="footer-links">
                <h3 class="footer-subheading">Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3 class="footer-subheading">Contact Info</h3>
                <div class="contact-item">
                    <span class="icon">✉</span>
                    <p>blinkphil@gmail.com</p>
                </div>
                <div class="contact-item">
                    <span class="icon">📞</span>
                    <p>(082) 228 - 6428</p>
                </div>
                <div class="contact-item">
                    <span class="icon">📍</span>
                    <p>Unit 205 Oroderm City Strip Mall C.M<br>
                        Recto St. Davao City, Davao del Sur 8000</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <hr class="footer-divider">
            <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>