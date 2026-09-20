@extends('frontend.layout')

@section('title', ($article->meta_title ?? $article->title) . ' | Star Ubud Silver Class')
@section('meta_description', $article->meta_description ?? $article->excerpt)
@section('meta_keywords', $article->meta_keywords ?? 'silver class ubud, silver jewelry making bali, jewelry workshop ubud, star ubud silver class')
@section('canonical', url('/article/' . $article->slug))
@section('og_title', $article->meta_title ?? $article->title)
@section('og_description', $article->meta_description ?? $article->excerpt)
@section('og_image', asset($article->og_image ?? $article->image ?? 'images/happy_participants.jpg'))
@section('og_type', 'article')

@section('seo_schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => url('/article/' . $article->slug)
    ],
    'headline' => $article->title,
    'description' => $article->meta_description ?? $article->excerpt,
    'image' => asset($article->image ?? 'images/happy_participants.jpg'),
    'author' => [
        '@type' => 'Organization',
        'name' => $article->author ?? 'Star Ubud Silver Class'
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Star Ubud Silver Class',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => asset('images/sky_silver_logo.jpg')
        ]
    ],
    'datePublished' => $article->published_at ? $article->published_at->toIso8601String() : now()->toIso8601String(),
    'dateModified' => $article->updated_at->toIso8601String()
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('content')

    <!-- =========================================================================
         ARTICLE SINGLE VIEW (MATCHING SCREENSHOT)
         ========================================================================= -->
    <section class="article-single-section">
        <div class="container">
            <div class="article-layout-grid">
                
                <!-- Left Column: Main Article -->
                <main class="article-main-content">
                    <h1 class="article-main-title">{{ $article->title }}</h1>

                    <div class="article-meta-row">
                        <div class="article-meta-item">
                            <i class="fa-regular fa-user"></i>
                            <span>{{ $article->author ?? 'Star Ubud Silver Class' }}</span>
                        </div>
                        <div class="article-meta-item">
                            <i class="fa-regular fa-calendar"></i>
                            <span>{{ $article->published_at ? $article->published_at->format('M d, Y') : 'May 25, 2026' }}</span>
                        </div>
                    </div>

                    <div class="article-body-content">
                        {!! $article->content !!}
                    </div>
                </main>

                <!-- Right Column: Sidebar "More Article" -->
                <aside class="article-sidebar" aria-label="Related Articles">
                    <h3 class="article-sidebar-title">More Article</h3>

                    <div class="sidebar-articles-list">
                        @foreach($moreArticles as $more)
                            <a href="{{ route('article.show', $more->slug) }}" class="sidebar-article-card">
                                <div class="sidebar-article-thumb-wrap">
                                    <img src="{{ asset($more->image ?? 'images/hero_silver_craft.jpg') }}" 
                                         alt="{{ $more->title }}" 
                                         class="sidebar-article-thumb" 
                                         loading="lazy">
                                </div>
                                <h4 class="sidebar-article-card-title">{{ $more->title }}</h4>
                                <span class="sidebar-article-date">
                                    {{ $more->published_at ? $more->published_at->format('M d, Y') : 'MAY 25, 2026' }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- Final CTA Experience Banner before Footer -->
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
