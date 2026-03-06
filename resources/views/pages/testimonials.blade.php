<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blink - Testimonials</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/css/testimonial-page.css'])
</head>

<body class="admin-mode">
  <nav class="navbar">
    <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></div>
    <ul class="nav-menu">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}">ABOUT</a></li>
      <li><a href="{{ route('products') }}">PRODUCTS</a></li>
      <li><a href="{{ route('testimonials') }}" class="active">TESTIMONIALS</a></li>
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
    </ul>
    <div class="nav-actions"><a href="#" class="btn-black">GET QUOTE</a></div>
  </nav>

  <main>
    {{-- Hero Section --}}
    <section class="hero"
      style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/testimonials/heroimage.png') }}');">
      <div class="hero-text">
        <h1>Client Testimonials</h1>
        <p>Hear from our satisfied partners from Dubai Al Aweer Market.</p>
      </div>
    </section>

    <div class="content-wrapper">
      {{-- Why Choose Blink Section --}}
      <section class="why-choose-section">
        <h2 class="section-heading">Why choose Blink?</h2>
        <p class="section-subheading">We bring together quality, reliability, and excellence in every shipment.</p>

        <div class="features-grid">
          <div class="feature-card">
            <div class="icon-placeholder">
              <img src="{{ asset('images/testimonials/premium.png') }}" alt="Premium Quality Icon">
            </div>
            <h3>Premium Quality</h3>
            <p>Hand-selected pineapples meeting international standards.</p>
          </div>

          <div class="feature-card">
            <div class="icon-placeholder">
              <img src="{{ asset('images/testimonials/reliable.png') }}" alt="Reliable Export Icon">
            </div>
            <h3>Reliable Export</h3>
            <p>Timely delivery to Middle East and worldwide.</p>
          </div>

          <div class="feature-card">
            <div class="icon-placeholder">
              <img src="{{ asset('images/testimonials/sustainable.png') }}" alt="Sustainable Farming Icon">
            </div>
            <h3>Sustainable Farming</h3>
            <p>Timely delivery to Middle East and worldwide.</p>
          </div>
        </div>
      </section>

      {{-- Client Testimonials Section --}}
      <section class="testimonials-section">
        <h2 class="section-heading">Client Testimonials</h2>
        <p class="section-subheading">Hear from our satisfied partners around Middle East</p>

        <div class="testimonial-grid">

          {{-- ADMIN: Add Testimonial Card --}}
          <div class="testimonial-card add-card admin-only" onclick="openTestimonialModal('add')">
            <div class="add-content">
              <i class="fa-solid fa-plus"></i>
              <span>Add Testimonial</span>
            </div>
          </div>

          @php
            $reviews = [
              ['name' => 'Importer, Al Aweer Market, Dubai', 'text' => 'Blink Philippines understands the Dubai market perfectly. Their "zero color" specification is always on point, and the quality of their MD2s is consistently excellent. A reliable partner for our business.'],
              ['name' => 'Procurement Manager, Dubai Fresh Produce Co.', 'text' => 'We\'ve worked with several suppliers, but the attention to detail from Blink Philippines regarding grading and packing is unmatched.'],
              ['name' => 'Importer, Alweer Market, Dubai', 'text' => 'Blink Philippines understands the Dubai market perfectly. Always on point.'],
              ['name' => 'Importer, Alweer Market, Dubai', 'text' => 'The quality of their MD2s is consistently excellent. A reliable partner.']
            ];
          @endphp

          @foreach($reviews as $review)
            <div class="testimonial-card">
              {{-- ADMIN: Controls --}}
              <div class="admin-controls">
                <button class="btn-admin edit"
                  onclick="openTestimonialModal('edit', '{{ $review['name'] }}', '{{ $review['text'] }}')">
                  <i class="fa-regular fa-pen-to-square"></i>
                </button>
                <button class="btn-admin delete" title="Delete">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </div>

              <p class="quote">“{{ $review['text'] }}”</p>
              <p class="author">— {{ $review['name'] }}</p>
            </div>
          @endforeach
        </div>
      </section>
    </div>

    {{-- Join CTA --}}
    <section class="join-cta">
      <h2>Join Our Happy Clients</h2>
      <p>Experience the Blink difference. Quality, reliability, and excellence in every shipment.</p>
      <a href="{{ route('contact') }}" class="btn-yellow">Start your Order</a>
    </section>
  </main>

  {{-- Universal Admin Modal for Testimonials --}}
  <div id="testimonialModal" class="modal-overlay">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="modalTitle">Add Testimonial</h3>
        <button class="close-x" onclick="closeModal()">&times;</button>
      </div>

      <div class="form-group">
        <label>Client Name / Company</label>
        <input type="text" id="clientName" placeholder="e.g. Importer, Dubai Market">
      </div>

      <div class="form-group">
        <label>Testimonial Text</label>
        <textarea id="clientQuote" rows="5" placeholder="Enter the client's feedback..."></textarea>
      </div>

      <div class="modal-actions">
        <button class="btn-cancel" onclick="closeModal()">Cancel</button>
        <button class="btn-save" onclick="saveTestimonial()">Save Testimonial</button>
      </div>
    </div>
  </div>

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
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h3 class="footer-subheading">Contact Info</h3>
        <div class="contact-item"><span>✉</span>
          <p>blinkphil@gmail.com</p>
        </div>
        <div class="contact-item"><span>📞</span>
          <p>(082) 228 - 6428</p>
        </div>
        <div class="contact-item"><span>📍</span>
          <p>Unit 205 Oroderm City Strip Mall Davao City</p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <hr class="footer-divider">
      <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
    </div>
  </footer>

  <script>
    function openTestimonialModal(mode, name = '', text = '') {
      const modal = document.getElementById('testimonialModal');
      const title = document.getElementById('modalTitle');
      const nameInput = document.getElementById('clientName');
      const quoteInput = document.getElementById('clientQuote');

      title.innerText = (mode === 'add') ? 'Add New Testimonial' : 'Edit Testimonial';
      nameInput.value = name;
      quoteInput.value = text;

      modal.style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('testimonialModal').style.display = 'none';
    }

    // Close modal if user clicks outside the white box
    window.onclick = function (event) {
      const modal = document.getElementById('testimonialModal');
      if (event.target == modal) {
        closeModal();
      }
    }

    function saveTestimonial() {
      // Here you would normally add your AJAX or Form Submit logic
      alert('Testimonial Saved Successfully!');
      closeModal();
    }
  </script>
</body>

</html>