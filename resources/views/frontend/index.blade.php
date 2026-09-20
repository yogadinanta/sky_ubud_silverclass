@extends('frontend.layout')

@section('content')

    <!-- =========================================================================
         HERO SECTION (IMMERSIVE BALINESE SILVER ARTISAN EXPERIENCE)
         ========================================================================= -->
    <section class="hero" id="home">
        <!-- Full-bleed background slideshow -->
        <div class="hero-bg-slider">
            <div class="hero-bg-slide active">
                <img src="{{ asset('images/artisan_rolling_mill.jpg') }}" alt="Silver Class in Ubud Bali" fetchpriority="high">
            </div>
            <div class="hero-bg-slide">
                <img src="{{ asset('images/happy_creators_rings.jpg') }}" alt="Happy Silver Workshop Participants" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="{{ asset('images/butterfly_ring_ricefield.jpg') }}" alt="Handcrafted Silver Jewelry Ubud" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="{{ asset('images/silver_rings_showcase.png') }}" alt="Handmade Silver Rings" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="{{ asset('images/hero_silver_craft.webp') }}" alt="Silver Jewelry Making Ubud" loading="lazy">
            </div>
        </div>

        <div class="hero-overlay"></div>

        <!-- Left & Right Chevron Navigation Arrows -->
        <button class="hero-chevron-arrow prev" id="heroPrevBtn" aria-label="Previous Slide">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="hero-chevron-arrow next" id="heroNextBtn" aria-label="Next Slide">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- Centered Main Content -->
        <div class="container" style="position: relative; z-index: 10;">
            <div class="hero-content-center">
                <span class="hero-subtag">SKY Ubud Silver Class</span>

                <h1 class="hero-main-title">
                    Create Your Own Silver Jewelry<br>
                    in the Heart of Ubud
                </h1>

                <p class="hero-main-desc">
                    Join our fun and hands-on silver jewelry making class in the heart of Ubud, Bali. Create your own unique ring, bracelet, or pendant and take home a beautiful, tangible memory from paradise!
                </p>

                <button class="btn-hero-reserve" onclick="openBookingModal()">
                    <span>Reserve Your Spot Now</span>
                </button>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         MORE THAN A SOUVENIR (ABOUT US / PHILOSOPHY SECTION)
         ========================================================================= -->
    <section class="about-section" id="philosophy">
        <div class="container">
            <div class="about-grid">
                
                <!-- Left Column: Arched Image Window with Studio Badge -->
                <div class="about-arch-card">
                    <img src="{{ asset('images/butterfly_ring_ricefield.jpg') }}" alt="SKY Ubud Silver Class Studio in Ubud" loading="lazy">
                    <div class="about-arch-badge">
                        <div class="about-arch-tag">Our Studio</div>
                        <div class="about-arch-name">SKY Ubud Silver Class</div>
                    </div>
                </div>

                <!-- Middle Column: Story, Title & Metrics -->
                <div class="about-content">
                    <div class="about-tag-wrap">
                        <span class="about-tag-line"></span>
                        <span>More Than a Souvenir</span>
                    </div>

                    <h2 class="about-title">
                        Make Something You Can <span class="about-title-accent">Wear Forever</span>
                    </h2>

                    <p class="about-desc">
                        Travel memories are special. But some memories become even more meaningful when you can wear them.
                    </p>

                    <p class="about-desc">
                        Choose your own simple design, work with pure silver, and experience the traditional process of creating jewelry with guidance from our experienced silversmith.
                    </p>

                    <div class="about-quote-box">
                        <p class="about-quote-text">
                            "Your finished piece is not just something you bought in Bali."
                        </p>
                        <p class="about-quote-sub">
                            It is something you created.
                        </p>
                    </div>

                    <div class="about-metrics">
                        <div>
                            <div class="about-metric-val">1–2 Hours</div>
                            <div class="about-metric-lbl">Complete Workshop Duration</div>
                        </div>
                        <div>
                            <div class="about-metric-val">100%</div>
                            <div class="about-metric-lbl">Handmade Take-Home Piece</div>
                        </div>
                    </div>

                    <a href="javascript:void(0)" onclick="openBookingModal()" class="about-cta-link">
                        <span>Reserve Your Spot</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Right Column: Stacked Rounded Workshop Photos -->
                <div class="about-photo-stack">
                    <div class="about-photo-card">
                        <img src="{{ asset('images/happy_creators_rings.jpg') }}" alt="Silver Workshop in Ubud" loading="lazy">
                    </div>
                    <div class="about-photo-card">
                        <img src="{{ asset('images/artisan_rolling_mill.jpg') }}" alt="Silver Rolling Mill with Rice Field Views" loading="lazy">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- =========================================================================
         WHAT WILL YOU CREATE? (PIECES SHOWCASE)
         ========================================================================= -->
    <section class="section" id="creations" style="background: linear-gradient(180deg, var(--bg-surface-1) 0%, var(--bg-surface-2) 100%);">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">What Will You Create?</span>
                <h2 class="section-title">
                    Choose a Piece That <span class="silver-gradient-text">Tells Your Story</span>
                </h2>
                <p class="section-desc">
                    Your design. Your hands. Your masterpiece.
                </p>
            </div>

            <div class="pieces-grid">
                
                <!-- Silver Ring -->
                <div class="piece-card">
                    <div class="piece-img-wrap">
                        <img src="{{ asset('images/silver_rings_showcase.png') }}" alt="Silver Ring Making Ubud" width="400" height="235" loading="lazy" decoding="async">
                    </div>
                    <div class="piece-body">
                        <div>
                            <div class="badge-pill" style="margin-bottom: 0.85rem; font-size: 0.74rem;">
                                <i class="fa-solid fa-ring"></i> Timeless Daily Wear
                            </div>
                            <h3 class="piece-title">SILVER RING</h3>
                            <p class="piece-desc">
                                A simple design, a personal meaning, and a piece you can wear every day. From hammered minimalist bands to gemstone settings and custom Balinese textures.
                            </p>
                        </div>
                        <button class="btn-outline" style="width: 100%; font-size: 0.88rem;" onclick="openBookingModal()">
                            <span>Craft a Silver Ring</span>
                        </button>
                    </div>
                </div>

                <!-- Silver Bracelet -->
                <div class="piece-card">
                    <div class="piece-img-wrap">
                        <img src="{{ asset('images/artisan_rolling_mill.jpg') }}" alt="Silver Workshop Making in Ubud" width="400" height="235" loading="lazy" decoding="async">
                    </div>
                    <div class="piece-body">
                        <div>
                            <div class="badge-pill badge-pill-gold" style="margin-bottom: 0.85rem; font-size: 0.74rem;">
                                <i class="fa-solid fa-wand-magic-sparkles"></i> Artisan Experience
                            </div>
                            <h3 class="piece-title">SILVER BRACELET</h3>
                            <p class="piece-desc">
                                Create a unique cuff or chain bracelet that reminds you of your time in Bali. Shaped with rolling mills, elegant curves, hammered facets, and custom textures.
                            </p>
                        </div>
                        <button class="btn-outline" style="width: 100%; font-size: 0.88rem;" onclick="openBookingModal()">
                            <span>Craft a Silver Bracelet</span>
                        </button>
                    </div>
                </div>

                <!-- Silver Pendant -->
                <div class="piece-card">
                    <div class="piece-img-wrap">
                        <img src="{{ asset('images/butterfly_ring_ricefield.jpg') }}" alt="Silver Pendant and Butterfly Jewelry Making Ubud" width="400" height="235" loading="lazy" decoding="async">
                    </div>
                    <div class="piece-body">
                        <div>
                            <div class="badge-pill" style="margin-bottom: 0.85rem; font-size: 0.74rem;">
                                <i class="fa-solid fa-sun"></i> Sacred & Symbolic
                            </div>
                            <h3 class="piece-title">SILVER PENDANT</h3>
                            <p class="piece-desc">
                                Turn an idea, symbol, celestial sky motif, or special memory into a meaningful necklace piece of jewelry close to your heart.
                            </p>
                        </div>
                        <button class="btn-outline" style="width: 100%; font-size: 0.88rem;" onclick="openBookingModal()">
                            <span>Craft a Silver Pendant</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================================
         PACKAGES & PRICING GRID
         ========================================================================= -->
    <section class="section" id="packages">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Choose Your Experience</span>
                <h2 class="section-title">
                    Find the Perfect Package for <span class="gold-gradient-text">Your Journey</span>
                </h2>
                <p class="section-desc">
                    Whether you are traveling solo, sharing a special moment with someone you love, or enjoying Bali with family and friends, we have a package for you.
                </p>
            </div>

            <div class="packages-grid">
                
                @foreach($packages as $package)
                    <div class="package-card {{ $package->is_featured ? 'featured' : '' }}">
                        @if($package->badge)
                            <div class="pkg-badge {{ $package->is_featured ? 'gold' : '' }}">
                                {{ $package->badge }}
                            </div>
                        @endif

                        <div>
                            <div class="pkg-header">
                                <h3 class="pkg-name">{{ $package->name }}</h3>
                                <div class="pkg-price-display">{{ $package->price_label }}</div>
                                @if($package->tagline)
                                    <div class="pkg-tagline">{{ $package->tagline }}</div>
                                @endif
                            </div>

                            @if($package->description)
                                <p style="font-size: 0.88rem; color: var(--silver-300); margin-bottom: 1.25rem; line-height: 1.6;">
                                    {{ $package->description }}
                                </p>
                            @endif

                            <div style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; color: var(--sky-400); margin-bottom: 0.85rem; letter-spacing: 0.08em; font-family: var(--font-subheading);">
                                INCLUDED IN PACKAGE:
                            </div>

                            <ul class="pkg-inclusions">
                                @if(is_array($package->inclusions))
                                    @foreach($package->inclusions as $inc)
                                        <li>
                                            <i class="fa-solid fa-circle-check"></i>
                                            <span>{{ $inc }}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <div>
                            <button class="{{ $package->is_featured ? 'btn-gold' : 'btn-primary' }}" style="width: 100%;" onclick="openBookingModal({{ $package->id }})">
                                <i class="fa-regular fa-calendar-check"></i>
                                <span>Book {{ $package->name }}</span>
                            </button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- =========================================================================
         WHY CHOOSE US / WHAT MAKES US DIFFERENT?
         ========================================================================= -->
    <section class="diff-section" id="why-us">
        <div class="container">
            <div class="diff-layout">
                
                <!-- Left Column: Sticky Title & Tag -->
                <div class="diff-header-col">
                    <div class="diff-tag-wrap">
                        <span class="diff-tag-line"></span>
                        <span>WHY CHOOSE US</span>
                    </div>
                    <h2 class="diff-title">
                        What Makes Us Different?
                    </h2>
                </div>

                <!-- Right Column: 5 Feature Cards Grid -->
                <div class="diff-cards-grid">
                    
                    <!-- Card 1: Rice Field View -->
                    <div class="diff-card">
                        <div class="diff-card-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <h3 class="diff-card-title">Beautiful Rice Field View in Ubud</h3>
                        <p class="diff-card-desc">
                            Enjoy the relaxing and peaceful atmosphere of authentic Ubud rice terraces while creating your own silver jewelry masterpiece.
                        </p>
                    </div>

                    <!-- Card 2: Professional Silversmith -->
                    <div class="diff-card">
                        <div class="diff-card-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h3 class="diff-card-title">Professional & Experienced Silversmith</h3>
                        <p class="diff-card-desc">
                            Learn directly from skilled local silversmiths with years of experience in traditional Balinese silver crafting.
                        </p>
                    </div>

                    <!-- Card 3: English-Speaking Staff -->
                    <div class="diff-card">
                        <div class="diff-card-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3 class="diff-card-title">English-Speaking Friendly Staff</h3>
                        <p class="diff-card-desc">
                            Our silversmith instructors communicate well in English, making the class easy, fun, and enjoyable for international guests.
                        </p>
                    </div>

                    <!-- Card 4: Family & Kids Friendly -->
                    <div class="diff-card">
                        <div class="diff-card-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3 class="diff-card-title">Family & Kids Friendly</h3>
                        <p class="diff-card-desc">
                            Safe, comfortable, and enjoyable for children and families with an environment for all ages.
                        </p>
                    </div>

                    <!-- Card 5: Take Home Creation -->
                    <div class="diff-card">
                        <div class="diff-card-icon">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                        <h3 class="diff-card-title">Take Home Your Own Creation</h3>
                        <p class="diff-card-desc">
                            Your handmade silver jewelry is yours to keep as a beautiful memory from your Bali holiday.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================================
         EMOTIONAL NARRATIVE CALLOUT
         ========================================================================= -->
    <section class="section" style="background: radial-gradient(circle at center, rgba(14,165,233,0.16) 0%, var(--bg-base) 80%); text-align: center;">
        <div class="container" style="max-width: 820px;">
            <span class="badge-pill badge-pill-gold">
                <i class="fa-solid fa-sparkles"></i> Unforgettable Bali Moment
            </span>
            <h2 class="section-title" style="margin-top: 1.1rem;">
                Your Time in Bali Deserves <br>
                <span class="gold-gradient-text">Something Special</span>
            </h2>
            <p style="font-size: 1.22rem; color: #ffffff; font-weight: 600; margin-bottom: 1.5rem;" class="font-subheading">
                Not Just a Souvenir. A Story You Can Wear.
            </p>
            <p style="font-size: 1.05rem; color: var(--silver-400); line-height: 1.8; margin-bottom: 2.2rem;">
                Imagine returning home with a piece of jewelry that you did not simply purchase, but created yourself. A ring shaped by your hands. A bracelet made during a special journey. A pendant that carries a memory. This is your opportunity to create something meaningful in Bali.
            </p>
            <button class="btn-gold" style="font-size: 1.02rem;" onclick="openBookingModal()">
                <i class="fa-solid fa-sparkles"></i>
                <span>Book Your Silver Class Now</span>
            </button>
        </div>
    </section>


    <!-- =========================================================================
         TESTIMONIALS & GUEST STORIES (REVIEWS FROM REAL PEOPLE)
         ========================================================================= -->
    <section class="testi-section" id="stories">
        <div class="container">
            
            <!-- Top Header & Social Proof Rating Bar -->
            <div class="testi-header-row">
                <div class="testi-badge-wrap">
                    <span class="testi-badge-text">TESTIMONIALS</span>
                    <span class="testi-badge-line"></span>
                </div>
                <h2 class="testi-section-title">What Our Customers Say</h2>
                
                <div class="testi-rating-badge">
                    <span class="testi-rating-score">5.0 / 5</span>
                    <div class="testi-stars-trust">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="testi-rating-brand">TripAdvisor & Google Reviews</span>
                    <span class="testi-rating-count">Based on 500+ verified guest reviews</span>
                </div>
            </div>

            <!-- Two-Column Showcase: Left Sidebar + Right Slider -->
            <div class="testi-showcase-grid">
                
                <!-- Left Sidebar: Quote Icon + Title + Progress & Arrow Controls -->
                <div class="testi-left-sidebar">
                    <div class="testi-quote-icon">
                        <svg width="46" height="36" viewBox="0 0 46 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 36C4.7 36 0 31.26 0 25.41C0 15.34 7.35 4.3 19.18 0L21.22 3.44C13.06 6.45 10.22 13.33 10.22 18.06C11.45 18.06 13.08 18.06 15.13 19.35C18.52 21.5 20.46 25.37 20.46 29.24C20.46 33.04 17.52 36 13.92 36H10.5ZM35.04 36C29.24 36 24.54 31.26 24.54 25.41C24.54 15.34 31.89 4.3 43.72 0L45.76 3.44C37.6 6.45 34.76 13.33 34.76 18.06C35.99 18.06 37.62 18.06 39.67 19.35C43.06 21.5 45 25.37 45 29.24C45 33.04 42.06 36 38.46 36H35.04Z" fill="#94A3B8"/>
                        </svg>
                    </div>

                    <h3 class="testi-sidebar-heading">
                        What our customers are saying
                    </h3>

                    <p class="testi-sidebar-desc">
                        Cherished memories and authentic stories shared by travelers from around the world who crafted their signature silver jewelry at our Ubud studio.
                    </p>

                    <!-- Interactive Slider Controls -->
                    <div class="testi-controls-wrap">
                        <button type="button" class="testi-arrow-btn" id="testiPrevBtn" aria-label="Previous Testimonials">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <div class="testi-progress-track">
                            <div class="testi-progress-thumb" id="testiProgressThumb"></div>
                        </div>
                        <button type="button" class="testi-arrow-btn" id="testiNextBtn" aria-label="Next Testimonials">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Right Side: Speech-Bubble Testimonial Cards Slider -->
                <div class="testi-slider-viewport" id="testiViewport">
                    <div class="testi-cards-track" id="testiTrack">
                        @foreach($testimonials as $t)
                            <div class="testi-card-item">
                                <!-- Speech Bubble Box -->
                                <div class="testi-bubble-card">
                                    <p class="testi-quote-text">
                                        "{{ $t->review }}"
                                    </p>
                                    
                                    <div class="testi-card-stars">
                                        @for($i = 0; $i < ($t->rating ?? 5); $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </div>
                                    <div class="testi-bubble-tail"></div>
                                </div>

                                <!-- Customer Profile Row -->
                                <div class="testi-author-row">
                                    <div class="testi-avatar-box">
                                        @if($t->photo)
                                            <img src="{{ asset($t->photo) }}" alt="{{ $t->customer_name }}" loading="lazy">
                                        @else
                                            <div class="testi-avatar-initials">
                                                {{ strtoupper(substr($t->customer_name, 0, 2)) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="testi-author-info">
                                        <h4 class="testi-author-name">{{ $t->customer_name }}</h4>
                                        <div class="testi-author-meta">
                                            <span>{{ $t->country_or_city }}</span>
                                            @if($t->item_crafted)
                                                <span class="testi-meta-dot">•</span>
                                                <span class="testi-crafted-tag">{{ $t->item_crafted }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- =========================================================================
         FAQ ACCORDION
         ========================================================================= -->
    <section class="section" id="faqs">
        <div class="container" style="max-width: 850px;">
            <div class="section-header">
                <span class="section-tag">Got Questions?</span>
                <h2 class="section-title">
                    Frequently Asked <span class="silver-gradient-text">Questions</span>
                </h2>
                <p class="section-desc">
                    Everything you need to know before joining your silver crafting session.
                </p>
            </div>

            <div class="faq-list">
                @foreach($faqs as $faq)
                    <div class="faq-item {{ $loop->first ? 'active' : '' }}">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <span>{{ $faq->question }}</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- =========================================================================
         VISIT OUR WORKSHOP / LOCATION MAP
         ========================================================================= -->
    <section class="location-section" id="location">
        <div class="container">
            <div class="location-header">
                <div class="location-badge-wrap">
                    <span class="location-badge-text">LOCATION</span>
                    <span class="location-badge-line"></span>
                </div>
                <h2 class="location-title">Visit Our Workshop</h2>
            </div>

            <div class="location-map-card">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d132381.7316933275!2d115.21685333147833!3d-8.538906103397036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23def608af5b3%3A0xf0ecf62059e6b4e4!2sSky%20Ubud%20Silver%20Class!5e0!3m2!1sid!2sid!4v1789894743092!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>
        </div>
    </section>


    <!-- =========================================================================
         FINAL CTA BANNER
         ========================================================================= -->
    <section class="section" style="background: linear-gradient(135deg, rgba(14, 165, 233, 0.22) 0%, var(--bg-base) 100%); border-top: 1px solid var(--border-subtle); text-align: center; padding: 6rem 0;">
        <div class="container" style="max-width: 760px;">
            <h2 class="section-title" style="margin-bottom: 1.15rem;">
                Create Your Own Masterpiece. <br>
                <span class="gold-gradient-text">Your Bali Memory Starts Here.</span>
            </h2>
            <p style="color: var(--silver-300); font-size: 1.08rem; margin-bottom: 2.4rem; line-height: 1.8;">
                Come and discover the art of silver-making at SKY Ubud Silver Class.<br>
                <strong>Create something personal. Learn something traditional. Take home something meaningful.</strong>
            </p>
            <button class="btn-primary" style="font-size: 1.05rem; padding: 1rem 2.6rem;" onclick="openBookingModal()">
                <i class="fa-solid fa-calendar-check"></i>
                <span>BOOK YOUR SILVER CLASS</span>
            </button>
        </div>
    </section>

@endsection
