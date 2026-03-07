<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Blink - Home</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

</head>

<body class="admin-mode">
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="BLink Logo">
        </div>
        <ul class="nav-menu" id="navMenu">
            <li><a href="{{ route('home') }}" class="active">HOME</a></li>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li><a href="{{ route('products') }}">PRODUCTS</a></li>
            <li><a href="{{ route('testimonials') }}">TESTIMONIALS</a></li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
        </ul>
        <div class="nav-actions">
            <a href="#" class="btn-black">GET QUOTE</a>
        </div>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <main class="container">
        <section class="hero" style="background-image: url('{{ asset('images/hero-pineapple.png') }}');">
            <div class="hero-overlay">
                <div class="hero-content">
                    <div class="hero-info">
                        <h1 class="hero-text">Premium Philippine</h1>
                        <h1 class="hero-text2">Pineapples</h1>
                        <p class="sub-text">Export high-grade pineapples from the heart of the Philippines to the Middle
                            East and beyond.</p>
                    </div>
                    <div class="hero-buttons">
                        <a href="#" class="btn-yellow">Explore Products</a>
                        <a href="#" class="btn-outline">Request Quote</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-section">
            <h2 class="section-title">Our Products</h2>
            <p class="section-subtitle">Discover our range of premium pineapple varieties.</p>
            <div class="products-layout-wrapper">
                <div class="product-grid">
                    <div class="product-card add-card admin-only" onclick="openModal('product', 'add')">
                        <div class="add-content">
                            <i class="fa-solid fa-plus"></i>
                            <span>Add Product</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="admin-controls">
                            <button class="btn-admin edit" onclick="openModal('product', 'edit', 'MD2 Pineapple')"><i
                                    class="fa-solid fa-pen"></i></button>
                            <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                        </div>
                        <img src="{{ asset('images/products/product1.png') }}" alt="MD2 Pineapple">
                        <div class="product-label">MD2 Pineapple (The "Gold Standard")</div>
                    </div>
                    <div class="product-card">
                        <div class="admin-controls">
                            <button class="btn-admin edit" onclick="openModal('product', 'edit', 'MD2 Pineapple')"><i
                                    class="fa-solid fa-pen"></i></button>
                            <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                        </div>
                        <img src="{{ asset('images/products/product2.png') }}" alt="MD3 Pineapple">
                        <div class="product-label">MD3 Pineapple (The "Smooth Cayenne")</div>
                    </div>
                </div>
                <div class="view-all-wrapper">
                    <a href="#" class="btn-view-all">View All Products &rarr;</a>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="services-container">
                <div class="services-left-card">
                    <div class="services-info">
                        <h2 class="title">Our Export Services</h2>
                        <p class="sub-title">From the farms of South Cotabato to the markets of Dubai we manage the
                            chain so you don't have to.</p>
                    </div>
                    <div class="services-elements-grid">
                        <div class="service-element-item">
                            <div class="element-icon">
                                <img src="{{ asset('images/home/verify.png') }}" alt="Logistics Icon">
                            </div>
                            <div class="element-content">
                                <h3>GLOBAL LOGISTICS & QUALITY ASSURANCE</h3>
                                <ul>
                                    <li>Scientific Research</li>
                                    <li>Decentralized Governance</li>
                                    <li>Machine Sense Detection</li>
                                </ul>
                            </div>
                        </div>
                        <div class="element-divider"></div>
                        <div class="service-element-item">
                            <div class="element-icon">
                                <img src="{{ asset('images/home/statistics.png') }}" alt="Logistics Icon">
                            </div>
                            <div class="element-content">
                                <h3>TRADE & DISTRIBUTION SERVICES</h3>
                                <ul>
                                    <li>Self-Sufficient E-commerce Platform</li>
                                    <li>Decentralized Supply Contracts</li>
                                    <li>Asset-Direct Market Distribution</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-right-stack">
                    <div class="services-image-card">
                        <img src="{{ asset('images/farmer-with-pineapple.jpg') }}" alt="Export Services">
                    </div>
                    <div class="services-logo-card">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                        <span>Philippines International OPC</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="story-section-new"
            style="background-image: url('{{ asset('images/home/storybackground.png') }}');">
            <div class="story-overlay-card">
                <div class="story-content-wrapper">
                    <h2 class="story-title">Our Story</h2>
                    <p class="story-subtitle">The Journey of the Perfect MD2 Pineapple, From Our Family to Yours.</p>
                    <p class="story-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="story-button-container">
                        <a href="{{ route('about') }}" class="btn-learn-more">LEARN MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="section-title">What our client’s Say</div>
            <div class="section-subtitle">Trusted by businesses across the globe.</div>
            <div class="testimonials-grid">
                <div class="testimonial-card add-card admin-only" onclick="openModal('testimonial', 'add')">
                    <div class="add-content">
                        <i class="fa-solid fa-plus"></i>
                        <span>Add Testimonial</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="admin-controls">
                        <button class="btn-admin edit" onclick="openModal('testimonial', 'edit')"><i
                                class="fa-solid fa-pen"></i></button>
                        <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Al Aweer Market, America</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>
                <div class="testimonial-card">
                    <div class="admin-controls">
                        <button class="btn-admin edit" onclick="openModal('testimonial', 'edit')"><i
                                class="fa-solid fa-pen"></i></button>
                        <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <p>“We’ve worked with several suppliers, but the attention to detail from Blink Philippines
                        regarding grading and packing is unmatched. It makes our job easier knowing the product will
                        arrive in perfect condition.”</p>
                    <div class="client-info">— Fresh Produce Co, Japan</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>
                <div class="testimonial-card">
                    <div class="admin-controls">
                        <button class="btn-admin edit" onclick="openModal('testimonial', 'edit')"><i
                                class="fa-solid fa-pen"></i></button>
                        <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Aweer Market, Dubai</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>
                <div class="testimonial-card">
                    <div class="admin-controls">
                        <button class="btn-admin edit" onclick="openModal('testimonial', 'edit')"><i
                                class="fa-solid fa-pen"></i></button>
                        <button class="btn-admin delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <p>“Blink Philippines understands the Dubai market perfectly. Their ‘zero color’ specification is
                        always on point, and the quality of their MD2s is consistently excellent. A reliable partner for
                        our business.”</p>
                    <div class="client-info">— Importer, Aweer Market, Philippines</div>
                    <div class="stars">★ ★ ★ ★ ★</div>
                </div>
            </div>
        </section>

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
                            <div class="input-group"><label for="name">Name:</label><input type="text" id="name"
                                    name="name"></div>
                            <div class="input-group"><label for="email">Email:</label><input type="email" id="email"
                                    name="email"></div>
                            <div class="form-row-inline">
                                <div class="input-group"><label for="company">Company:</label><input type="text"
                                        id="company" name="company"></div>
                                <div class="input-group"><label for="phone">Phone:</label><input type="tel" id="phone"
                                        name="phone"></div>
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="input-group full-height"><label for="message">Message:</label><textarea
                                    id="message" name="message"></textarea></div>
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
                <a href="{{ route('contact') }}" class="btn-footer-contact">CONTACT US</a>
            </div>
            <div class="footer-links">
                <h3 class="footer-subheading">Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3 class="footer-subheading">Contact Info</h3>
                <div class="contact-item"><span class="icon">✉</span>
                    <p>blinkphil@gmail.com</p>
                </div>
                <div class="contact-item"><span class="icon">📞</span>
                    <p>(082) 228 - 6428</p>
                </div>
                <div class="contact-item"><span class="icon">📍</span>
                    <p>Unit 205 Oroderm City Strip Mall C.M<br>Recto St. Davao City, Davao del Sur 8000</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <hr class="footer-divider">
            <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
        </div>
    </footer>

    <div id="adminModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Edit Details</h3>
                <button class="close-x" onclick="closeModal()">&times;</button>
            </div>
            <div id="productFields">
                <div class="form-group"><label>Product Name</label><input type="text" id="prodName"
                        placeholder="e.g. MD2 Pineapple"></div>
                <div class="form-group"><label>Description</label><textarea id="prodDesc" rows="3"></textarea></div>
                <div class="form-group"><label>Product Image</label><input type="file" class="file-input"></div>
            </div>
            <div id="testimonialFields" style="display:none;">
                <div class="form-group"><label>Client Feedback</label><textarea id="testText" rows="4"
                        placeholder="Enter their quote..."></textarea></div>
                <div class="form-group"><label>Client Name & Location</label><input type="text" id="testClient"
                        placeholder="e.g. Importer, Dubai"></div>
                <div class="form-group"><label>Rating (1-5)</label><input type="number" id="testStars" min="1" max="5"
                        value="5"></div>
            </div>
            <div class="modal-actions">
                <button class="btn-cancel" onclick="closeModal()">Cancel</button>
                <button class="btn-save" onclick="handleSave()">Save Changes</button>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        }
        function openModal(type, action, name = "") {
            const modal = document.getElementById('adminModal');
            const title = document.getElementById('modalTitle');
            const prodFields = document.getElementById('productFields');
            const testFields = document.getElementById('testimonialFields');
            modal.style.display = 'flex';
            if (type === 'product') {
                title.innerText = (action === 'add') ? "Add New Product" : "Edit Product";
                prodFields.style.display = 'block';
                testFields.style.display = 'none';
                document.getElementById('prodName').value = name;
            } else {
                title.innerText = (action === 'add') ? "Add New Testimonial" : "Edit Testimonial";
                prodFields.style.display = 'none';
                testFields.style.display = 'block';
            }
        }
        function closeModal() { document.getElementById('adminModal').style.display = 'none'; }
        function handleSave() { closeModal(); }
    </script>
</body>

</html>