@extends('frontend.layout')

@section('title', 'Gallery of Moments & Creations | Star Ubud Silver Class')
@section('meta_description', 'Explore our photo gallery featuring genuine silversmith moments, handcrafted rings, pendants, and smiling participants at Star Ubud Silver Class.')

@section('content')

    <!-- =========================================================================
         PAGE HERO BANNER (MATCHING SCREENSHOT)
         ========================================================================= -->
    <div class="page-hero-banner">
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
            <div class="gallery-header">
                <div class="gallery-badge-wrap">
                    <span class="gallery-badge-text">GALLERY</span>
                    <span class="gallery-badge-line"></span>
                </div>
                <h2 class="gallery-title">Gallery of Moments & Creations</h2>
            </div>

            <div class="gallery-bento-grid">
                
                <!-- Col 1: Tall Card -->
                <div class="gallery-col">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/artisan_rolling_mill.jpg') }}" alt="Silversmith Artisan Guidance Ubud" class="gallery-img" loading="lazy">
                    </div>
                </div>

                <!-- Col 2: Tall Card -->
                <div class="gallery-col">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/butterfly_ring_ricefield.jpg') }}" alt="Balinese Silver Studio Window" class="gallery-img" loading="lazy">
                    </div>
                </div>

                <!-- Col 3: 2 Stacked Cards -->
                <div class="gallery-col">
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/silver_rings_showcase.png') }}" alt="Silver Butterfly Ring in Ubud" class="gallery-img" loading="lazy">
                    </div>
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/happy_creators_rings.jpg') }}" alt="Silver Jewelry Workshop Creator" class="gallery-img" loading="lazy">
                    </div>
                </div>

                <!-- Col 4: Tall Card -->
                <div class="gallery-col">
                    <div class="gallery-card-tall">
                        <img src="{{ asset('images/happy_participants.jpg') }}" alt="Happy Creators at Silver Workshop" class="gallery-img" loading="lazy">
                    </div>
                </div>

                <!-- Col 5: 2 Stacked Cards -->
                <div class="gallery-col">
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/hero_silver_craft.jpg') }}" alt="Designing Silver Jewelry Together" class="gallery-img" loading="lazy">
                    </div>
                    <div class="gallery-card-half">
                        <img src="{{ asset('images/silver_creations_trio.jpg') }}" alt="Happy Participants in Ubud Silver Workshop" class="gallery-img" loading="lazy">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
