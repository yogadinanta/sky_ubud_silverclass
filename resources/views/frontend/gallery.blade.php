@extends('frontend.layout')

@section('title', 'Gallery of Moments & Creations | SKY Ubud Silver Class')
@section('meta_description', 'Explore our photo gallery featuring genuine silversmith moments, handcrafted rings, pendants, and smiling participants at SKY Ubud Silver Class.')

@section('content')

    <!-- =========================================================================
         PAGE HERO BANNER (MATCHING SCREENSHOT)
         ========================================================================= -->
    <div class="page-hero-banner" data-aos="fade-down" data-aos-duration="600">
        <div class="container">
            <div class="page-hero-content">
                <nav class="page-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>/</span>
                    <span class="page-breadcrumb-current">Gallery</span>
                </nav>
                <h1 class="page-hero-title">Gallery</h1>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         GALLERY OF MOMENTS & CREATIONS BENTO GRID
         ========================================================================= -->
    <section class="gallery-section" id="gallery-content">
        <div class="container">
            <div class="gallery-header" data-aos="fade-up">
                <div class="gallery-badge-wrap">
                    <span class="gallery-badge-text">GALLERY</span>
                    <span class="gallery-badge-line"></span>
                </div>
                <h2 class="gallery-title">Gallery of Moments & Creations</h2>
            </div>

            <div class="gallery-bento-grid">
                
                <!-- Col 1: Tall Card -->
                <div class="gallery-col" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/artisan_rolling_mill.jpg') }}" alt="Silversmith Artisan Guidance Ubud" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Workshop Process</span>
                            <h4 class="gallery-caption-title">Artisan Rolling Mill & Guidance</h4>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Tall Card -->
                <div class="gallery-col" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/butterfly_ring_ricefield.jpg') }}" alt="Balinese Silver Studio Window" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Handmade Creation</span>
                            <h4 class="gallery-caption-title">Sterling Silver Butterfly Ring</h4>
                        </div>
                    </div>
                </div>

                <!-- Col 3: 2 Stacked Cards -->
                <div class="gallery-col" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/bespoke_silver_rings.jpg') }}" alt="Hammered 925 Pure Silver Rings" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Bespoke Jewelry</span>
                            <h4 class="gallery-caption-title">Hammered 925 Silver Bands</h4>
                        </div>
                    </div>
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/happy_creators_rings.jpg') }}" alt="Silver Jewelry Workshop Creator" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Guest Moments</span>
                            <h4 class="gallery-caption-title">Smiling Jewelry Creators</h4>
                        </div>
                    </div>
                </div>

                <!-- Col 4: Tall Card -->
                <div class="gallery-col" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/happy_participants.jpg') }}" alt="Happy Creators at Silver Workshop" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Workshop Experience</span>
                            <h4 class="gallery-caption-title">Hands-on Silversmithing Session</h4>
                        </div>
                    </div>
                </div>

                <!-- Col 5: 2 Stacked Cards -->
                <div class="gallery-col" data-aos="fade-up" data-aos-delay="500">
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/hero_silver_craft.jpg') }}" alt="Designing Silver Jewelry Together" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Master Craft</span>
                            <h4 class="gallery-caption-title">Traditional Soldering & Shaping</h4>
                        </div>
                    </div>
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/silver_creations_trio.jpg') }}" alt="Happy Participants in Ubud Silver Workshop" class="gallery-img" loading="lazy">
                        <div class="gallery-caption-overlay">
                            <span class="gallery-caption-tag">Take Home Memory</span>
                            <h4 class="gallery-caption-title">Cherished Ubud Masterpieces</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         CTA: BOOK YOUR EXPERIENCE TODAY
         ========================================================================= -->
    <section class="cta-experience-section" id="book-experience">
        <div class="container">
            <div class="cta-experience-card" data-aos="zoom-in" data-aos-duration="700">
                <div class="cta-experience-content">
                    <h2 class="cta-experience-title">Book Your Experience Today</h2>
                    <p class="cta-experience-desc">
                        Reserve your silver class quickly and easily through WhatsApp. Step into our studio and enjoy a private, relaxing, and unforgettable silver-making experience in Ubud. Ready to create your own custom ring, pendant, earrings, or bracelet? Our expert silversmiths are waiting to guide you.
                    </p>
                    <a href="https://api.whatsapp.com/send/?phone=6285941018703&text={{ rawurlencode('Hello Star Ubud Silver Class, I want to book a class.') }}" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="btn-cta-wa"
                       aria-label="Easy Booking via WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Easy Booking via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
