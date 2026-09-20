@extends('frontend.layout')

@section('title', 'Articles & Bali Crafting Guides | Star Ubud Silver Class')
@section('meta_description', 'Read our latest guides, silversmith tips, and stories about jewelry making workshops in Ubud Bali.')
@section('meta_keywords', 'bali silver blog, ubud silver class articles, jewelry making guides ubud')
@section('canonical', url('/articles'))

@section('content')

    <!-- Hero Banner -->
    <div class="page-hero-banner">
        <div class="container">
            <div class="page-hero-content">
                <nav class="page-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>/</span>
                    <span class="page-breadcrumb-current">Articles</span>
                </nav>
                <h1 class="page-hero-title">Articles & Guides</h1>
            </div>
        </div>
    </div>

    <!-- Articles Listing Grid -->
    <section class="articles-section" style="padding: 5.5rem 0 6.5rem 0;">
        <div class="container">
            <div class="articles-header">
                <div class="articles-badge-wrap">
                    <span class="articles-badge-text">ARTICLES</span>
                    <span class="articles-badge-line"></span>
                </div>
                <h2 class="articles-section-title">Explore Our Latest Stories</h2>
            </div>

            <div class="articles-grid">
                @foreach($articles as $article)
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="{{ asset($article->image ?? 'images/hero_silver_craft.jpg') }}" alt="{{ $article->title }}" loading="lazy">
                        </div>

                        <div class="article-card-body">
                            <div>
                                <div class="article-card-date">
                                    {{ $article->published_at ? $article->published_at->format('M d, Y') : 'MAY 25, 2026' }}
                                </div>
                                <h3 class="article-card-heading">
                                    <a href="{{ route('article.show', $article->slug) }}" style="color: inherit; text-decoration: none;">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <p class="article-card-excerpt">
                                    {{ $article->excerpt }}
                                </p>
                            </div>

                            <a href="{{ route('article.show', $article->slug) }}" class="article-card-link">
                                <span>Read More</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div style="margin-top: 3.5rem; display: flex; justify-content: center;">
                {{ $articles->links() }}
            </div>
        </div>
    </section>

    <!-- Final CTA Banner -->
    <section class="cta-experience-section" id="book-experience">
        <div class="container">
            <div class="cta-experience-card">
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
