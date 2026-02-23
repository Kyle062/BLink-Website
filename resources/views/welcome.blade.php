<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>BLink - Home</title>
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
                    <li><a href="#" class="active">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">TESTIMONIALS</a></li>
                    <li><a href="#">CONTACT</a></li>
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
                <div class="product-card view-all-card">
                    <a href="#" class="btn-view-all">View All Products</a>
                </div>
            </div>
            <div class="services-container">
                <div class="services-left-card">
                    <h3 class="title">Our Export Services</h3>
                    <p class="sub-title">From the farms of South Cotabato to the markets of Dubai—we manage the chain so
                        you don't have to.</p>
                </div>
                <div class="services-right-card">
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>



    </main>

</body>

</html>