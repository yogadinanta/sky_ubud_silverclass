<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKY Ubud Silver Class | Craft Your Memory, Wear Your Masterpiece in Bali</title>
    <meta name="description" content="Discover traditional Balinese silver craftsmanship at SKY Ubud Silver Class on Jl. Jembawan, Ubud. Handcraft your custom 925 sterling silver ring, bracelet, or pendant.">
    <meta name="keywords" content="silver class ubud, jewelry making bali, bali silver workshop, ubud best silver class, handmade jewelry ubud, jembawan ubud">
    <link rel="canonical" href="{{ url('/') }}">
    
    <!-- Open Graph Meta -->
    <meta property="og:title" content="SKY Ubud Silver Class - Wear Your Masterpiece">
    <meta property="og:description" content="A meaningful jewelry-making experience in Ubud, Bali. Craft your own 925 sterling silver ring, bracelet, or pendant.">
    <meta property="og:image" content="{{ asset('images/sky_silver_logo.webp') }}">
    <meta property="og:type" content="website">

    <!-- Performance Preloads & Hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preload" as="image" href="{{ asset('images/hero_silver_craft.webp') }}" type="image/webp">
    <link rel="preload" as="image" href="{{ asset('images/sky_silver_logo.webp') }}" type="image/webp">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="{{ asset('images/sky_silver_logo.webp') }}">

    <!-- Google Fonts with display=swap -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons with async stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>

    <style>
        /* ==========================================================================
           HARMONIOUS DESIGN SYSTEM & TOKENS
           ========================================================================== */
        :root {
            /* SKY Cyan & Horizon Blue Palette */
            --sky-50: #f0f9ff;
            --sky-100: #e0f2fe;
            --sky-200: #bae6fd;
            --sky-300: #7dd3fc;
            --sky-400: #38bdf8;
            --sky-500: #0ea5e9;
            --sky-600: #0284c7;
            --sky-700: #0369a1;
            
            /* Sterling Silver & Platinum Chrome Palette */
            --silver-50: #ffffff;
            --silver-100: #f8fafc;
            --silver-200: #e2e8f0;
            --silver-300: #cbd5e1;
            --silver-400: #94a3b8;
            --silver-500: #64748b;
            
            /* Royal Balinese Artisan Gold Palette */
            --gold-200: #fef08a;
            --gold-300: #fde68a;
            --gold-400: #f59e0b;
            --gold-500: #d97706;
            --gold-600: #b45309;

            /* Dark Obsidian & Ubud Night Studio Backdrops */
            --bg-base: #060b14;
            --bg-surface-1: #0a1120;
            --bg-surface-2: #0f192c;
            --bg-surface-3: #14223b;
            --bg-glass: rgba(12, 21, 38, 0.72);
            --bg-glass-hover: rgba(18, 30, 52, 0.88);
            
            /* Borders & Highlights */
            --border-subtle: rgba(255, 255, 255, 0.08);
            --border-glass: rgba(56, 189, 248, 0.16);
            --border-glass-hover: rgba(56, 189, 248, 0.45);
            --border-gold: rgba(245, 158, 11, 0.35);
            --border-gold-hover: rgba(245, 158, 11, 0.65);

            /* Typography */
            --font-heading: 'Cinzel', serif;
            --font-subheading: 'Outfit', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            
            /* Layout & Radii */
            --radius-sm: 0.5rem;
            --radius-md: 0.875rem;
            --radius-lg: 1.25rem;
            --radius-xl: 1.5rem;
            --radius-full: 9999px;
            
            /* Shadows & Glows */
            --shadow-subtle: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
            --shadow-card: 0 20px 40px -15px rgba(0, 0, 0, 0.6);
            --shadow-glow-sky: 0 0 35px -5px rgba(14, 165, 233, 0.3);
            --shadow-glow-gold: 0 0 35px -5px rgba(217, 119, 6, 0.3);
        }

        /* Reset */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-base);
            color: var(--silver-200);
            font-family: var(--font-body);
            font-size: 1rem;
            line-height: 1.7;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 12% 15%, rgba(14, 165, 233, 0.09) 0%, transparent 45%),
                radial-gradient(circle at 88% 75%, rgba(217, 119, 6, 0.07) 0%, transparent 45%),
                radial-gradient(circle at 50% 50%, rgba(10, 17, 32, 0.6) 0%, transparent 100%);
            background-attachment: fixed;
            -webkit-font-smoothing: antialiased;
        }

        /* Unified Typography Styles */
        h1, h2, h3, h4, h5, .font-heading {
            font-family: var(--font-heading);
            letter-spacing: 0.04em;
            color: var(--silver-50);
            text-wrap: balance;
        }

        .font-subheading {
            font-family: var(--font-subheading);
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Text Shimmer Gradients */
        .silver-gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 45%, #94a3b8 70%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gold-gradient-text {
            background: linear-gradient(135deg, #fef08a 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sky-gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #7dd3fc 45%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Unified Buttons */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 60%, #0369a1 100%);
            color: #ffffff;
            font-family: var(--font-subheading);
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 0.85rem 1.85rem;
            border-radius: var(--radius-full);
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.4);
            cursor: pointer;
            transition: transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 60%, #0284c7 100%);
            box-shadow: 0 15px 30px -5px rgba(14, 165, 233, 0.65);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-gold {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 70%, #b45309 100%);
            color: #ffffff;
            font-family: var(--font-subheading);
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 0.85rem 1.85rem;
            border-radius: var(--radius-full);
            text-decoration: none;
            border: 1px solid rgba(253, 230, 138, 0.4);
            box-shadow: 0 10px 25px -5px rgba(217, 119, 6, 0.4);
            cursor: pointer;
            transition: transform 0.25s ease, background 0.25s ease, box-shadow 0.25s ease;
        }

        .btn-gold:hover {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 70%, #d97706 100%);
            box-shadow: 0 15px 30px -5px rgba(217, 119, 6, 0.65);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: rgba(255, 255, 255, 0.04);
            color: var(--silver-100);
            font-family: var(--font-subheading);
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 0.8rem 1.7rem;
            border-radius: var(--radius-full);
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(56, 189, 248, 0.4);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Unified Glass Cards */
        .glass-panel {
            background: var(--bg-glass);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-glass);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-card);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
            will-change: transform;
        }

        .glass-panel:hover {
            border-color: var(--border-glass-hover);
            transform: translateY(-4px);
            box-shadow: var(--shadow-glow-sky);
        }

        .glass-panel-gold {
            background: linear-gradient(135deg, rgba(20, 28, 48, 0.8) 0%, rgba(15, 23, 42, 0.85) 100%);
            border: 1px solid var(--border-gold);
            backdrop-filter: blur(16px);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-card);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-panel-gold:hover {
            border-color: var(--border-gold-hover);
            transform: translateY(-4px);
            box-shadow: var(--shadow-glow-gold);
        }

        /* Unified Badge Pills */
        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(14, 165, 233, 0.12);
            border: 1px solid rgba(56, 189, 248, 0.35);
            padding: 0.35rem 0.95rem;
            border-radius: var(--radius-full);
            font-size: 0.78rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 600;
            color: var(--sky-400);
            font-family: var(--font-subheading);
        }

        .badge-pill-gold {
            background: rgba(245, 158, 11, 0.14);
            border: 1px solid rgba(245, 158, 11, 0.4);
            color: var(--gold-300);
        }

        /* Unified Icon Holder */
        .icon-circle {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.2) 0%, rgba(2, 132, 199, 0.05) 100%);
            border: 1px solid rgba(56, 189, 248, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--sky-400);
            font-size: 1.35rem;
            margin-bottom: 1.25rem;
            transition: transform 0.3s ease;
        }

        .icon-circle-gold {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(217, 119, 6, 0.05) 100%);
            border: 1px solid rgba(245, 158, 11, 0.4);
            color: var(--gold-400);
        }

        .glass-panel:hover .icon-circle {
            transform: scale(1.08) rotate(3deg);
        }

        /* Navigation Header (Crisp Clean White & Royal Blue Luxury Aesthetic) */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            padding: 0.85rem 0;
            transition: padding 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .navbar.scrolled {
            padding: 0.65rem 0;
            background: #ffffff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            border-bottom-color: rgba(19, 71, 206, 0.15);
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            text-decoration: none;
            flex-shrink: 0;
        }

        .brand-logo-badge {
            background: transparent;
            border-radius: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: none;
            border: none;
            transition: transform 0.25s ease;
        }

        .brand-logo:hover .brand-logo-badge {
            transform: scale(1.04);
        }

        .brand-logo-badge img {
            height: 44px;
            width: auto;
            display: block;
            object-fit: contain;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 2.2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            font-family: var(--font-subheading);
            font-size: 0.9rem;
            font-weight: 700;
            color: #1347ce;
            text-decoration: none;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            position: relative;
            padding: 0.35rem 0;
            transition: color 0.25s ease, transform 0.25s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            transition: width 0.25s ease;
        }

        .nav-link:hover {
            color: #0c2c84;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-nav-book {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.55rem;
            background: #1347ce;
            color: #ffffff !important;
            font-family: var(--font-subheading);
            font-weight: 700;
            font-size: 0.88rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.68rem 1.65rem;
            border-radius: 9999px;
            border: none;
            box-shadow: 0 4px 16px rgba(19, 71, 206, 0.35);
            cursor: pointer;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .btn-nav-book:hover {
            background: #0e37a6;
            box-shadow: 0 6px 22px rgba(19, 71, 206, 0.55);
            transform: translateY(-2px);
        }

        .mobile-toggle {
            display: none;
            background: transparent;
            border: none;
            color: #1347ce;
            font-size: 1.6rem;
            cursor: pointer;
            padding: 0.25rem;
        }

        /* Section Layout Structure */
        .section {
            padding: 6rem 0;
            position: relative;
            content-visibility: auto;
        }

        .section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 3.75rem auto;
        }

        .section-tag {
            font-size: 0.85rem;
            font-family: var(--font-subheading);
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--sky-400);
            margin-bottom: 0.75rem;
            display: inline-block;
        }

        .section-title {
            font-size: clamp(1.9rem, 3.4vw, 2.75rem);
            margin-bottom: 1.15rem;
            line-height: 1.22;
        }

        .section-desc {
            color: var(--silver-400);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        /* Hero Section Styling (Immersive Full-Bleed Background Slideshow & Centered Content) */
        .hero {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            padding: 8.5rem 1.5rem 6rem 1.5rem;
            background: #09101f;
        }

        .hero-bg-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-bg-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1), transform 6s ease;
            transform: scale(1.05);
            will-change: opacity, transform;
        }

        .hero-bg-slide.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            z-index: 2;
        }

        .hero-bg-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.58) 0%, rgba(15, 23, 42, 0.44) 50%, rgba(15, 23, 42, 0.68) 100%);
        }

        .hero-content-center {
            position: relative;
            z-index: 10;
            max-width: 860px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.15rem;
        }

        .hero-subtag {
            font-family: var(--font-subheading);
            font-size: 1.05rem;
            font-weight: 600;
            color: #ffffff;
            letter-spacing: 0.04em;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            margin-bottom: 0.25rem;
        }

        .hero-main-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.3rem, 5vw, 4.1rem);
            font-weight: 800;
            line-height: 1.16;
            color: #ffffff;
            letter-spacing: -0.01em;
            text-shadow: 0 3px 18px rgba(0, 0, 0, 0.7);
            margin: 0;
            text-wrap: balance;
        }

        .hero-main-desc {
            font-size: clamp(1rem, 1.6vw, 1.14rem);
            color: rgba(255, 255, 255, 0.94);
            line-height: 1.65;
            max-width: 720px;
            margin: 0 auto;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
            font-weight: 400;
        }

        .btn-hero-reserve {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            background: #1347ce;
            color: #ffffff !important;
            font-family: var(--font-subheading);
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 0.02em;
            padding: 0.85rem 2.4rem;
            border-radius: 9999px;
            border: none;
            box-shadow: 0 6px 24px rgba(19, 71, 206, 0.55);
            cursor: pointer;
            text-decoration: none;
            margin-top: 0.5rem;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .btn-hero-reserve:hover {
            background: #0e37a6;
            box-shadow: 0 8px 30px rgba(19, 71, 206, 0.75);
            transform: translateY(-2px);
        }

        /* Large Chevron Navigation Arrows */
        .hero-chevron-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 15;
            background: transparent;
            border: none;
            color: rgba(255, 255, 255, 0.8);
            font-size: 2.8rem;
            cursor: pointer;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s ease;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.5);
        }

        .hero-chevron-arrow:hover {
            color: #ffffff;
            transform: translateY(-50%) scale(1.18);
        }

        .hero-chevron-arrow.prev {
            left: 1.2rem;
        }

        .hero-chevron-arrow.next {
            right: 1.2rem;
        }

        @media (max-width: 768px) {
            .hero-chevron-arrow {
                font-size: 2rem;
                padding: 0.75rem;
            }
            .hero-chevron-arrow.prev {
                left: 0.4rem;
            }
            .hero-chevron-arrow.next {
                right: 0.4rem;
            }
        }

        /* About / Philosophy Section (Asymmetric 3-Column Luxury Boutique Layout) */
        .about-section {
            background: #ffffff;
            color: #1e293b;
            padding: 6.5rem 0;
            position: relative;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.35fr 1fr;
            gap: 2.75rem;
            align-items: center;
        }

        /* Left Column: Arched Image Window */
        .about-arch-card {
            position: relative;
            height: 490px;
            border-radius: 200px 200px 20px 20px;
            overflow: hidden;
            box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.12);
            background: #f1f5f9;
        }

        .about-arch-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .about-arch-card:hover img {
            transform: scale(1.05);
        }

        .about-arch-badge {
            position: absolute;
            bottom: 1.5rem;
            left: 1.5rem;
            right: 1.5rem;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .about-arch-tag {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.14em;
            color: #94a3b8;
            font-weight: 700;
        }

        .about-arch-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: 0.04em;
        }

        /* Middle Column: Text & Story */
        .about-content {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .about-tag-wrap {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .about-tag-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .about-title {
            font-family: var(--font-subheading);
            font-size: clamp(1.95rem, 3vw, 2.65rem);
            font-weight: 800;
            line-height: 1.22;
            color: #0d1b3e;
            letter-spacing: -0.01em;
            margin: 0;
        }

        .about-title-accent {
            color: #1347ce;
        }

        .about-desc {
            font-size: 0.98rem;
            color: #475569;
            line-height: 1.75;
            margin: 0;
        }

        .about-quote-box {
            background: #f8fafc;
            border-left: 3.5px solid #1347ce;
            padding: 1.1rem 1.35rem;
            border-radius: 0 12px 12px 0;
            border-top: 1px solid #e2e8f0;
            border-right: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .about-quote-text {
            font-family: var(--font-subheading);
            font-size: 1.02rem;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.5;
            margin-bottom: 0.25rem;
        }

        .about-quote-sub {
            font-size: 0.92rem;
            font-weight: 700;
            color: #1347ce;
            margin: 0;
        }

        .about-metrics {
            display: flex;
            gap: 2.25rem;
            padding-top: 0.35rem;
        }

        .about-metric-val {
            font-family: var(--font-subheading);
            font-size: 1.65rem;
            font-weight: 800;
            color: #1347ce;
            line-height: 1;
            margin-bottom: 0.35rem;
        }

        .about-metric-lbl {
            font-size: 0.8rem;
            color: #64748b;
            font-weight: 500;
        }

        .about-cta-link {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            color: #1347ce;
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.25s ease;
            width: fit-content;
            margin-top: 0.25rem;
            font-family: var(--font-subheading);
        }

        .about-cta-link:hover {
            color: #0b2a80;
            transform: translateX(4px);
        }

        .about-cta-link i {
            transition: transform 0.25s ease;
        }

        .about-cta-link:hover i {
            transform: translateX(3px);
        }

        /* Right Column: Stacked Rounded Photos */
        .about-photo-stack {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .about-photo-card {
            border-radius: 20px;
            overflow: hidden;
            height: 232px;
            box-shadow: 0 15px 35px -8px rgba(0, 0, 0, 0.1);
            background: #f1f5f9;
            position: relative;
        }

        .about-photo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .about-photo-card:hover img {
            transform: scale(1.06);
        }

        @media (max-width: 992px) {
            .about-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .about-arch-card {
                max-width: 360px;
                margin: 0 auto;
                height: 420px;
            }

            .about-photo-stack {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.25rem;
            }

            .about-photo-card {
                height: 200px;
            }
        }

        @media (max-width: 640px) {
            .about-photo-stack {
                grid-template-columns: 1fr;
            }

            .about-metrics {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* What Makes Us Different / Why Choose Us Section */
        .diff-section {
            background: #f8fafc;
            color: #1e293b;
            padding: 6.5rem 0;
            position: relative;
        }

        .diff-layout {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 3.5rem;
            align-items: flex-start;
        }

        .diff-header-col {
            position: sticky;
            top: 6rem;
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
        }

        .diff-tag-wrap {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .diff-tag-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .diff-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.1rem, 3.5vw, 2.9rem);
            font-weight: 800;
            line-height: 1.2;
            color: #0d1b3e;
            letter-spacing: -0.01em;
            margin: 0;
        }

        .diff-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .diff-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 2.2rem 1.6rem;
            text-align: center;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px -8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .diff-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px -10px rgba(19, 71, 206, 0.12);
            border-color: rgba(19, 71, 206, 0.3);
        }

        .diff-card-icon {
            font-size: 2rem;
            color: #1347ce;
            margin-bottom: 1.1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .diff-card:hover .diff-card-icon {
            transform: scale(1.12);
        }

        .diff-card-title {
            font-family: var(--font-subheading);
            font-size: 1.05rem;
            font-weight: 700;
            color: #0d1b3e;
            margin: 0 0 0.65rem 0;
            line-height: 1.4;
        }

        .diff-card-desc {
            font-size: 0.88rem;
            color: #64748b;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 1100px) {
            .diff-layout {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .diff-header-col {
                position: static;
            }

            .diff-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .diff-cards-grid {
                grid-template-columns: 1fr;
            }
        }

        /* =========================================================================
           TESTIMONIALS SECTION (REVIEWS FROM REAL PEOPLE)
           ========================================================================= */
        .testi-section {
            background: #ffffff;
            color: #1e293b;
            padding: 6.5rem 0 7rem 0;
            position: relative;
            overflow: hidden;
            border-top: 1px solid #eef2f6;
            border-bottom: 1px solid #eef2f6;
        }

        .testi-header-row {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3.5rem auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.65rem;
        }

        .testi-badge-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .testi-badge-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .testi-section-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.2rem, 3.8vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #0d1b3e;
            letter-spacing: -0.015em;
            margin: 0;
        }

        .testi-rating-badge {
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.65rem;
            margin-top: 0.4rem;
            font-size: 0.94rem;
            color: #475569;
            font-family: var(--font-subheading);
        }

        .testi-rating-score {
            font-weight: 800;
            color: #0f172a;
        }

        .testi-stars-trust {
            display: inline-flex;
            gap: 2.5px;
            color: #00b67a;
            font-size: 0.95rem;
        }

        .testi-rating-brand {
            font-weight: 700;
            color: #0d1b3e;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .testi-rating-count {
            color: #64748b;
        }

        /* 2-Column Showcase Grid: Left Info & Controls + Right Slider */
        .testi-showcase-grid {
            display: grid;
            grid-template-columns: 290px 1fr;
            gap: 3.5rem;
            align-items: flex-start;
        }

        .testi-left-sidebar {
            display: flex;
            flex-direction: column;
            padding-top: 0.5rem;
        }

        .testi-quote-icon {
            margin-bottom: 1.25rem;
            line-height: 1;
            display: inline-flex;
        }

        .testi-sidebar-heading {
            font-family: var(--font-subheading);
            font-size: clamp(1.65rem, 2.4vw, 2.1rem);
            font-weight: 800;
            line-height: 1.25;
            color: #0d1b3e;
            letter-spacing: -0.01em;
            margin-bottom: 0.85rem;
        }

        .testi-sidebar-desc {
            font-size: 0.92rem;
            color: #64748b;
            line-height: 1.65;
            margin-bottom: 2.2rem;
        }

        /* Slider Controls */
        .testi-controls-wrap {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .testi-arrow-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            color: #0d1b3e;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .testi-arrow-btn:hover {
            background: #1347ce;
            border-color: #1347ce;
            color: #ffffff;
            transform: scale(1.06);
            box-shadow: 0 6px 16px rgba(19, 71, 206, 0.25);
        }

        .testi-arrow-btn:active {
            transform: scale(0.96);
        }

        .testi-progress-track {
            flex: 1;
            max-width: 140px;
            height: 4px;
            background: #e2e8f0;
            border-radius: 9999px;
            position: relative;
            overflow: hidden;
        }

        .testi-progress-thumb {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 35%;
            background: #1347ce;
            border-radius: 9999px;
            transition: left 0.3s cubic-bezier(0.16, 1, 0.3, 1), width 0.3s ease;
        }

        /* Testimonials Slider Viewport */
        .testi-slider-viewport {
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            padding: 0.5rem 0.5rem 2.2rem 0.5rem;
            margin: -0.5rem -0.5rem -2.2rem -0.5rem;
            cursor: grab;
            user-select: none;
        }

        .testi-slider-viewport:active {
            cursor: grabbing;
        }

        .testi-slider-viewport::-webkit-scrollbar {
            display: none;
        }

        .testi-cards-track {
            display: flex;
            gap: 1.6rem;
            align-items: stretch;
            width: max-content;
        }

        .testi-card-item {
            width: 340px;
            flex: 0 0 340px;
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }

        /* Speech Bubble Card */
        .testi-bubble-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 22px;
            padding: 1.85rem 1.65rem;
            box-shadow: 0 10px 28px -6px rgba(0, 0, 0, 0.05);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 235px;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .testi-bubble-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 38px -8px rgba(19, 71, 206, 0.12);
            border-color: rgba(19, 71, 206, 0.28);
        }

        .testi-bubble-tail {
            position: absolute;
            bottom: -9px;
            left: 36px;
            width: 17px;
            height: 17px;
            background: #ffffff;
            border-right: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
            transform: rotate(45deg);
            transition: border-color 0.3s ease;
        }

        .testi-bubble-card:hover .testi-bubble-tail {
            border-color: rgba(19, 71, 206, 0.28);
        }

        .testi-quote-text {
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.7;
            margin: 0 0 1.25rem 0;
            font-weight: 400;
        }

        .testi-card-stars {
            display: flex;
            gap: 3.5px;
            color: #00b67a;
            font-size: 0.95rem;
            margin-top: auto;
        }

        /* Customer Author Meta */
        .testi-author-row {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding-left: 0.75rem;
        }

        .testi-avatar-box {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            background: linear-gradient(135deg, #1347ce 0%, #38bdf8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .testi-avatar-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .testi-avatar-initials {
            color: #ffffff;
            font-family: var(--font-subheading);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .testi-author-info {
            display: flex;
            flex-direction: column;
        }

        .testi-author-name {
            font-family: var(--font-subheading);
            font-size: 0.95rem;
            font-weight: 700;
            color: #0d1b3e;
            margin: 0;
            line-height: 1.3;
        }

        .testi-author-meta {
            font-size: 0.8rem;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 0.35rem;
            flex-wrap: wrap;
        }

        .testi-meta-dot {
            color: #cbd5e1;
        }

        .testi-crafted-tag {
            color: #1347ce;
            font-weight: 600;
        }

        @media (max-width: 992px) {
            .testi-showcase-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .testi-left-sidebar {
                padding-top: 0;
            }

            .testi-sidebar-desc {
                margin-bottom: 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .testi-card-item {
                width: 290px;
                flex: 0 0 290px;
            }

            .testi-bubble-card {
                padding: 1.5rem 1.35rem;
                min-height: 215px;
            }
        }

        /* Journey Steps */
        .journey-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(215px, 1fr));
            gap: 1.35rem;
        }

        .journey-card {
            background: var(--bg-glass);
            border: 1px solid var(--border-glass);
            border-radius: var(--radius-xl);
            padding: 1.85rem 1.45rem;
            transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease;
            will-change: transform;
            display: flex;
            flex-direction: column;
        }

        .journey-card:hover {
            border-color: var(--sky-400);
            transform: translateY(-4px);
            background: var(--bg-glass-hover);
        }

        .journey-num {
            font-family: var(--font-heading);
            font-size: 2.35rem;
            font-weight: 800;
            color: rgba(56, 189, 248, 0.28);
            line-height: 1;
            margin-bottom: 0.85rem;
            transition: color 0.25s ease;
        }

        .journey-card:hover .journey-num {
            color: var(--sky-400);
        }

        .journey-card-title {
            font-size: 1.12rem;
            font-weight: 700;
            margin-bottom: 0.65rem;
            color: #ffffff;
        }

        .journey-card-text {
            font-size: 0.88rem;
            color: var(--silver-400);
            line-height: 1.6;
        }

        /* What Will You Create Cards */
        .pieces-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.85rem;
        }

        .piece-card {
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: var(--bg-glass);
            border: 1px solid var(--border-glass);
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            will-change: transform;
            display: flex;
            flex-direction: column;
        }

        .piece-card:hover {
            border-color: var(--sky-400);
            transform: translateY(-5px);
            box-shadow: var(--shadow-glow-sky);
        }

        .piece-img-wrap {
            height: 235px;
            overflow: hidden;
            position: relative;
            background: var(--bg-base);
        }

        .piece-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .piece-card:hover .piece-img-wrap img {
            transform: scale(1.06);
        }

        .piece-body {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .piece-title {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 0.65rem;
            color: #ffffff;
        }

        .piece-desc {
            color: var(--silver-400);
            font-size: 0.92rem;
            margin-bottom: 1.35rem;
            line-height: 1.65;
        }

        /* Packages Grid */
        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(265px, 1fr));
            gap: 1.85rem;
            align-items: stretch;
        }

        .package-card {
            background: var(--bg-glass);
            border: 1px solid var(--border-glass);
            border-radius: var(--radius-xl);
            padding: 2.1rem 1.65rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            will-change: transform;
        }

        .package-card.featured {
            background: linear-gradient(180deg, rgba(14, 165, 233, 0.15) 0%, rgba(15, 25, 44, 0.9) 100%);
            border: 1px solid rgba(56, 189, 248, 0.5);
            box-shadow: var(--shadow-glow-sky);
        }

        .package-card:hover {
            transform: translateY(-6px);
            border-color: var(--sky-400);
            box-shadow: var(--shadow-glow-sky);
        }

        .pkg-badge {
            position: absolute;
            top: -11px;
            right: 20px;
            background: linear-gradient(135deg, #0ea5e9, #0284c7);
            color: #ffffff;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.28rem 0.9rem;
            border-radius: var(--radius-full);
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.4);
            font-family: var(--font-subheading);
        }

        .pkg-badge.gold {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            box-shadow: 0 4px 12px rgba(217, 119, 6, 0.4);
        }

        .pkg-header {
            margin-bottom: 1.25rem;
            border-bottom: 1px solid var(--border-subtle);
            padding-bottom: 1.25rem;
        }

        .pkg-name {
            font-size: 1.45rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 0.4rem;
        }

        .pkg-price-display {
            font-family: var(--font-subheading);
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--sky-400);
            margin-bottom: 0.4rem;
        }

        .pkg-tagline {
            font-size: 0.85rem;
            color: var(--silver-400);
            font-style: italic;
        }

        .pkg-inclusions {
            list-style: none;
            margin-bottom: 1.85rem;
            flex-grow: 1;
        }

        .pkg-inclusions li {
            font-size: 0.9rem;
            color: var(--silver-300);
            margin-bottom: 0.65rem;
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
        }

        .pkg-inclusions li i {
            color: var(--sky-400);
            margin-top: 0.25rem;
            font-size: 0.82rem;
        }

        /* FAQ Accordion */
        .faq-item {
            background: var(--bg-glass);
            border: 1px solid var(--border-glass);
            border-radius: var(--radius-lg);
            margin-bottom: 0.85rem;
            overflow: hidden;
            transition: border-color 0.25s ease, background 0.25s ease;
        }

        .faq-item.active {
            border-color: rgba(56, 189, 248, 0.4);
            background: var(--bg-surface-2);
        }

        .faq-question {
            padding: 1.2rem 1.45rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-family: var(--font-subheading);
            font-weight: 600;
            font-size: 1.02rem;
            color: var(--silver-100);
            user-select: none;
        }

        .faq-icon {
            transition: transform 0.25s ease;
            color: var(--sky-400);
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            padding: 0 1.45rem;
            color: var(--silver-400);
            font-size: 0.92rem;
            line-height: 1.65;
        }

        .faq-item.active .faq-answer {
            max-height: 250px;
            padding-bottom: 1.45rem;
        }

        /* Floating WhatsApp Button */
        .floating-wa {
            position: fixed;
            bottom: 1.8rem;
            right: 1.8rem;
            z-index: 90;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            background: #25D366;
            color: #ffffff;
            padding: 0.75rem 1.3rem;
            border-radius: var(--radius-full);
            text-decoration: none;
            font-family: var(--font-subheading);
            font-weight: 600;
            font-size: 0.92rem;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            will-change: transform;
        }

        .floating-wa:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 35px rgba(37, 211, 102, 0.6);
            color: #ffffff;
        }

        /* Modal Styles */
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(8px);
            z-index: 100;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        /* =========================================================================
           OUR WORKSHOP / PACKAGES BLUE SECTION (MATCHING SCREENSHOT)
           ========================================================================= */
        .packages-blue-section {
            background: #1347ce;
            color: #ffffff;
            padding: 6.5rem 0 7rem 0;
            position: relative;
        }

        .pkg-blue-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3.5rem auto;
        }

        .pkg-blue-tag {
            font-family: var(--font-subheading);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.6rem;
            display: inline-block;
        }

        .pkg-blue-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.2rem, 3.8vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #ffffff;
            letter-spacing: -0.015em;
            margin: 0;
        }

        .packages-blue-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            align-items: stretch;
        }

        .pkg-blue-card {
            background: #ffffff;
            color: #1e293b;
            border-radius: 16px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
        }

        .pkg-blue-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.2);
        }

        .pkg-card-img-wrap {
            height: 195px;
            overflow: hidden;
            position: relative;
            background: #e2e8f0;
        }

        .pkg-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .pkg-blue-card:hover .pkg-card-img-wrap img {
            transform: scale(1.06);
        }

        .pkg-card-body {
            padding: 1.5rem 1.35rem 1.6rem 1.35rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }

        .pkg-card-top-info {
            margin-bottom: 1.25rem;
        }

        .pkg-card-name {
            font-family: var(--font-subheading);
            font-size: 1.18rem;
            font-weight: 800;
            color: #0d1b3e;
            text-align: center;
            margin: 0 0 0.35rem 0;
            line-height: 1.3;
        }

        .pkg-card-price-lbl {
            font-family: var(--font-subheading);
            font-size: 0.98rem;
            font-weight: 800;
            color: #1347ce;
            text-align: center;
            margin-bottom: 0.9rem;
        }

        .pkg-card-desc-text {
            font-size: 0.84rem;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 1.15rem;
        }

        .pkg-card-checklist {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
            display: flex;
            flex-direction: column;
            gap: 0.55rem;
        }

        .pkg-card-checklist li {
            display: flex;
            align-items: flex-start;
            gap: 0.55rem;
            font-size: 0.82rem;
            color: #334155;
            line-height: 1.45;
        }

        .pkg-card-checklist li i {
            color: #1347ce;
            font-size: 0.85rem;
            margin-top: 0.15rem;
            flex-shrink: 0;
        }

        .btn-pkg-blue {
            background: #1347ce;
            color: #ffffff !important;
            font-family: var(--font-subheading);
            font-size: 0.88rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            cursor: pointer;
            width: 100%;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .btn-pkg-blue:hover {
            background: #0b2a80;
            box-shadow: 0 4px 14px rgba(19, 71, 206, 0.35);
        }

        @media (max-width: 1100px) {
            .packages-blue-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .packages-blue-grid {
                grid-template-columns: 1fr;
            }
        }

        /* =========================================================================
           ARTICLES / BLOG SECTION (MATCHING SCREENSHOT)
           ========================================================================= */
        .articles-section {
            background: #ffffff;
            color: #1e293b;
            padding: 6.5rem 0 7rem 0;
            position: relative;
        }

        .articles-header {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 3.5rem auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.65rem;
        }

        .articles-badge-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .articles-badge-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .articles-section-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.2rem, 3.8vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #0d1b3e;
            letter-spacing: -0.015em;
            margin: 0;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .article-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px -4px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px -6px rgba(19, 71, 206, 0.12);
            border-color: rgba(19, 71, 206, 0.3);
        }

        .article-img-wrap {
            height: 220px;
            overflow: hidden;
            background: #f1f5f9;
            position: relative;
        }

        .article-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .article-card:hover .article-img-wrap img {
            transform: scale(1.06);
        }

        .article-card-body {
            padding: 1.6rem 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }

        .article-card-date {
            font-size: 0.78rem;
            font-weight: 700;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 0.6rem;
        }

        .article-card-heading {
            font-family: var(--font-subheading);
            font-size: 1.1rem;
            font-weight: 800;
            color: #0d1b3e;
            line-height: 1.42;
            margin: 0 0 0.85rem 0;
            transition: color 0.2s ease;
        }

        .article-card:hover .article-card-heading {
            color: #1347ce;
        }

        .article-card-excerpt {
            font-size: 0.88rem;
            color: #64748b;
            line-height: 1.65;
            margin: 0 0 1.35rem 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .article-card-link {
            color: #1347ce;
            font-family: var(--font-subheading);
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            transition: transform 0.2s ease, color 0.2s ease;
            margin-top: auto;
        }

        .article-card-link:hover {
            color: #0b2a80;
            transform: translateX(4px);
        }

        @media (max-width: 992px) {
            .articles-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .articles-grid {
                grid-template-columns: 1fr;
            }
        }

        /* =========================================================================
           MODERN WHITE BOOKING MODAL (MATCHING SCREENSHOT)
           ========================================================================= */
        .modal-box-modern {
            background: #ffffff;
            border-radius: 22px;
            max-width: 500px;
            width: 100%;
            max-height: 92vh;
            overflow-y: auto;
            padding: 2.2rem;
            box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.25);
            position: relative;
            transform: translateY(15px);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            color: #1e293b;
        }

        .modal-backdrop.open .modal-box-modern {
            transform: translateY(0);
        }

        .modal-modern-close {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            background: #f1f5f9;
            border: none;
            color: #64748b;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.95rem;
        }

        .modal-modern-close:hover {
            background: #fee2e2;
            color: #ef4444;
        }

        .modal-modern-title {
            font-family: var(--font-subheading);
            font-size: 1.7rem;
            font-weight: 800;
            color: #1347ce;
            margin: 0 0 0.35rem 0;
            line-height: 1.2;
        }

        .modal-modern-sub {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0 0 1.6rem 0;
        }

        .form-modern-group {
            margin-bottom: 1.2rem;
        }

        .form-modern-label {
            display: block;
            font-size: 0.78rem;
            font-weight: 700;
            color: #64748b;
            margin-bottom: 0.45rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-family: var(--font-subheading);
        }

        .form-modern-input, .form-modern-select, .form-modern-textarea {
            width: 100%;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            color: #0f172a;
            font-family: inherit;
            font-size: 0.95rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-modern-input:focus, .form-modern-select:focus, .form-modern-textarea:focus {
            outline: none;
            border-color: #1347ce;
            box-shadow: 0 0 0 3px rgba(19, 71, 206, 0.12);
        }

        .form-modern-price-display {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            font-weight: 800;
            color: #0f172a;
            font-family: var(--font-subheading);
            display: flex;
            align-items: center;
            min-height: 46px;
        }

        .btn-modern-submit {
            background: #1347ce;
            color: #ffffff;
            font-family: var(--font-subheading);
            font-weight: 700;
            font-size: 1rem;
            padding: 0.95rem;
            border-radius: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1.25rem;
        }

        .btn-modern-submit:hover {
            background: #0b2a80;
            box-shadow: 0 6px 18px rgba(19, 71, 206, 0.3);
            transform: translateY(-2px);
        }

        /* =========================================================================
           GALLERY SECTION (GALLERY OF MOMENTS & CREATIONS)
           ========================================================================= */
        .gallery-section {
            background: #ffffff;
            color: #1e293b;
            padding: 6.5rem 0 7rem 0;
            position: relative;
        }

        .gallery-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3.5rem auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.65rem;
        }

        .gallery-badge-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .gallery-badge-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .gallery-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.2rem, 3.8vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #0d1b3e;
            letter-spacing: -0.015em;
            margin: 0;
        }

        /* 5-Column Bento Grid */
        .gallery-bento-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.25rem;
            align-items: stretch;
        }

        .gallery-col {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .gallery-card-tall {
            height: 480px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px -4px rgba(0, 0, 0, 0.06);
            background: #f1f5f9;
            position: relative;
        }

        .gallery-card-half {
            height: 232px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px -4px rgba(0, 0, 0, 0.06);
            background: #f1f5f9;
            position: relative;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .gallery-card-tall:hover .gallery-img,
        .gallery-card-half:hover .gallery-img {
            transform: scale(1.06);
        }

        @media (max-width: 1100px) {
            .gallery-bento-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 640px) {
            .gallery-bento-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.85rem;
            }

            .gallery-card-tall {
                height: 280px;
            }

            .gallery-card-half {
                height: 135px;
            }
        }

        /* =========================================================================
           VISIT OUR WORKSHOP / LOCATION MAP SECTION
           ========================================================================= */
        .location-section {
            background: #ffffff;
            color: #1e293b;
            padding: 6rem 0 6.5rem 0;
            position: relative;
        }

        .location-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3rem auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.65rem;
        }

        .location-badge-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            font-size: 0.84rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #1347ce;
            font-family: var(--font-subheading);
        }

        .location-badge-line {
            width: 28px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            display: inline-block;
        }

        .location-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.2rem, 3.8vw, 3rem);
            font-weight: 800;
            line-height: 1.18;
            color: #0d1b3e;
            letter-spacing: -0.015em;
            margin: 0;
        }

        .location-map-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 12px 35px -8px rgba(0, 0, 0, 0.08);
            height: 480px;
            width: 100%;
            position: relative;
        }

        .location-map-card iframe {
            width: 100%;
            height: 100%;
            border: 0;
            display: block;
        }

        @media (max-width: 640px) {
            .location-map-card {
                height: 380px;
                border-radius: 14px;
            }
        }

        /* =========================================================================
           CLEAN WHITE LUXURY FOOTER (MATCHING USER'S DESIGN)
           ========================================================================= */
        .footer {
            background: #ffffff;
            color: #475569;
            border-top: 1px solid #eef2f6;
            padding: 5rem 0 2rem 0;
            content-visibility: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1.1fr 1.6fr;
            gap: 3.5rem;
            margin-bottom: 3.5rem;
            align-items: flex-start;
        }

        .footer-logo-box {
            width: auto;
            height: auto;
            max-width: 140px;
            border-radius: 0;
            overflow: visible;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 1.5rem;
            box-shadow: none;
        }

        .footer-logo-box img {
            height: 52px;
            width: auto;
            object-fit: contain;
            display: block;
        }

        .footer-social-label {
            font-family: var(--font-subheading);
            font-size: 0.82rem;
            font-weight: 800;
            color: #0d1b3e;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 0.9rem;
        }

        .footer-social-icons {
            display: flex;
            align-items: center;
            gap: 0.65rem;
        }

        .footer-social-btn {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            background: #1347ce;
            color: #ffffff !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            text-decoration: none;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .footer-social-btn:hover {
            background: #0b2a80;
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(19, 71, 206, 0.3);
        }

        .footer-col-title {
            font-family: var(--font-subheading);
            font-size: 1.2rem;
            font-weight: 700;
            color: #0d1b3e;
            margin: 0 0 0.4rem 0;
            line-height: 1.3;
        }

        .footer-accent-line {
            width: 42px;
            height: 2.5px;
            background: #1347ce;
            border-radius: 2px;
            margin-bottom: 1.5rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
        }

        .footer-links a {
            color: #475569;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.2s ease, transform 0.2s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: #1347ce;
            transform: translateX(3px);
        }

        .footer-contact-list {
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.85rem;
            font-size: 0.94rem;
            color: #475569;
            line-height: 1.6;
        }

        .footer-contact-item i {
            color: #0d1b3e;
            font-size: 1.1rem;
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

        .footer-contact-item a {
            color: #475569;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-contact-item a:hover {
            color: #1347ce;
        }

        .footer-bottom {
            padding-top: 2.5rem;
            border-top: 1px solid #f1f5f9;
            text-align: center;
        }

        .footer-copyright {
            font-size: 0.88rem;
            color: #64748b;
            margin: 0;
            font-weight: 500;
        }

        @media (max-width: 992px) {
            .navbar {
                padding: 0.75rem 0;
            }

            .hero {
                padding: 7rem 0 3.5rem 0;
                min-height: auto;
            }

            .hero-container {
                grid-template-columns: 1fr;
                gap: 2.75rem;
            }

            .hero-slider-container {
                aspect-ratio: 16 / 12;
            }

            .hero-highlights-strip {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.1rem;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 1.5rem 2rem;
                gap: 1.25rem;
                border-bottom: 2px solid rgba(19, 71, 206, 0.2);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
            }

            .nav-menu.open {
                display: flex;
            }

            .mobile-toggle {
                display: block;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 640px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-highlights-strip {
                grid-template-columns: 1fr 1fr;
            }

            .hero-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .hero-actions .btn-primary,
            .hero-actions .btn-outline {
                width: 100%;
                justify-content: center;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 0.75rem;
                text-align: center;
            }

            .floating-wa span {
                display: none;
            }

            .floating-wa {
                padding: 0.85rem;
                bottom: 1.25rem;
                right: 1.25rem;
            }
        }

        /* =========================================================================
           CTA BOOK YOUR EXPERIENCE TODAY (MATCHING SCREENSHOT)
           ========================================================================= */
        .cta-experience-section {
            background: #ffffff;
            padding: 2.5rem 0 5.5rem 0;
            position: relative;
        }

        .cta-experience-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            background-color: #1347ce;
            background-image: linear-gradient(135deg, rgba(20, 60, 170, 0.82) 0%, rgba(30, 80, 200, 0.86) 100%), url('{{ asset('images/hero_silver_craft.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 4.5rem 2rem;
            text-align: center;
            box-shadow: 0 16px 36px -8px rgba(19, 71, 206, 0.22);
            color: #ffffff;
        }

        .cta-experience-content {
            position: relative;
            z-index: 2;
            max-width: 820px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cta-experience-title {
            font-family: var(--font-subheading);
            font-size: clamp(2rem, 3.6vw, 2.75rem);
            font-weight: 800;
            letter-spacing: -0.015em;
            line-height: 1.2;
            color: #ffffff;
            margin: 0 0 1.15rem 0;
        }

        .cta-experience-desc {
            font-size: clamp(0.95rem, 1.25vw, 1.05rem);
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.92);
            margin: 0 0 2rem 0;
            max-width: 780px;
        }

        .btn-cta-wa {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            background: #ffffff;
            color: #1347ce;
            font-family: var(--font-subheading);
            font-size: 0.98rem;
            font-weight: 700;
            padding: 0.9rem 2.2rem;
            border-radius: 9999px;
            text-decoration: none;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .btn-cta-wa i {
            font-size: 1.2rem;
            color: #1347ce;
        }

        .btn-cta-wa:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.22);
            background: #f8fafc;
            color: #0d1b3e;
        }

        @media (max-width: 768px) {
            .cta-experience-card {
                padding: 3.5rem 1.5rem;
                border-radius: 18px;
            }
            .cta-experience-desc {
                font-size: 0.92rem;
            }
        }

        /* =========================================================================
           INNER PAGE HERO BANNER (MATCHING SCREENSHOT)
           ========================================================================= */
        .page-hero-banner {
            position: relative;
            padding: 9rem 0 5rem 0;
            background-color: #0d1b3e;
            background-image: linear-gradient(180deg, rgba(13, 27, 62, 0.72) 0%, rgba(13, 27, 62, 0.88) 100%), url('{{ asset('images/hero_silver_craft.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            overflow: hidden;
        }

        .page-hero-content {
            position: relative;
            z-index: 2;
        }

        .page-breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.75);
            margin-bottom: 0.75rem;
        }

        .page-breadcrumb a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .page-breadcrumb a:hover {
            color: #ffffff;
        }

        .page-breadcrumb-current {
            color: #ffffff;
            font-weight: 700;
        }

        .page-hero-title {
            font-family: var(--font-subheading);
            font-size: clamp(2.6rem, 5vw, 3.8rem);
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.15;
            color: #ffffff;
            margin: 0;
        }

        @media (max-width: 768px) {
            .page-hero-banner {
                padding: 7.5rem 0 4rem 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Header -->
    <header class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="brand-logo" aria-label="SKY Ubud Silver Class Home">
                <div class="brand-logo-badge">
                    <picture>
                        <source srcset="{{ asset('images/sky_silver_logo.webp') }}" type="image/webp">
                        <img src="{{ asset('images/sky_silver_logo.jpg') }}" alt="SKY Ubud Silver Class Logo" width="36" height="36">
                    </picture>
                </div>
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ url('/') }}#home" class="nav-link">HOME</a></li>
                <li><a href="{{ url('/') }}#packages" class="nav-link">OUR WORKSHOP</a></li>
                <li><a href="{{ url('/') }}#articles" class="nav-link">ARTICLES</a></li>
                <li><a href="{{ url('/gallery') }}" class="nav-link">GALLERY</a></li>
                <li><a href="{{ url('/') }}#location" class="nav-link">CONTACT US</a></li>
            </ul>

            <div class="nav-actions" style="display: flex; align-items: center; gap: 0.85rem;">
                <button class="btn-nav-book" onclick="openBookingModal()">
                    <span>JOIN WORKSHOP</span>
                </button>
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp Quick Button -->
    <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6285941018703' }}?text={{ rawurlencode('Hello Star Ubud Silver Class! I would like to inquire about booking a jewelry making session.') }}" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="floating-wa" 
       title="Chat with us on WhatsApp"
       aria-label="Chat with us on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Booking Modal (Matching Screenshot) -->
    <div class="modal-backdrop" id="bookingModal">
        <div class="modal-box-modern">
            <button class="modal-modern-close" onclick="closeBookingModal()" aria-label="Close modal">
                <i class="fa-solid fa-xmark"></i>
            </button>
            
            <h3 class="modal-modern-title">Book Your Class</h3>
            <p class="modal-modern-sub">Complete the form to send booking via WhatsApp</p>

            <form id="reservationForm" onsubmit="handleBookingSubmit(event)">
                @csrf
                <div class="form-modern-group">
                    <label class="form-modern-label" for="custName">Full Name</label>
                    <input type="text" id="custName" name="customer_name" class="form-modern-input" placeholder="Enter your name" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.95rem;" class="form-modern-group">
                    <div>
                        <label class="form-modern-label" for="pkgSelect">Package</label>
                        <select id="pkgSelect" name="package_id" class="form-modern-select" onchange="updatePriceCalculator()" required>
                            @foreach($packages as $pkg)
                                <option value="{{ $pkg->id }}" 
                                        data-price="{{ $pkg->price }}" 
                                        data-slug="{{ $pkg->slug }}"
                                        data-min="{{ $pkg->min_persons }}"
                                        data-label="{{ $pkg->price_label }}"
                                        data-name="{{ $pkg->name }}"
                                        {{ $loop->first ? 'selected' : '' }}>
                                    {{ $pkg->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="form-modern-label">Total Price</label>
                        <div class="form-modern-price-display" id="priceDisplay">
                            Rp 500.000 / Person
                        </div>
                    </div>
                </div>

                <div class="form-modern-group">
                    <label class="form-modern-label" for="bookDate">Booking Date</label>
                    <input type="date" id="bookDate" name="booking_date" class="form-modern-input" min="{{ date('Y-m-d') }}" required>
                </div>

                <div class="form-modern-group">
                    <label class="form-modern-label" for="specialReq">Notes (Optional)</label>
                    <textarea id="specialReq" name="special_requests" class="form-modern-textarea" rows="3" placeholder="Special requests..."></textarea>
                </div>

                <button type="submit" id="submitBtn" class="btn-modern-submit">
                    <span>Send to WhatsApp</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                
                <!-- Col 1: Logo & Social Media -->
                <div class="footer-col">
                    <div class="footer-logo-box">
                        <picture>
                            <source srcset="{{ asset('images/sky_silver_logo.webp') }}" type="image/webp">
                            <img src="{{ asset('images/sky_silver_logo.jpg') }}" alt="Silver Class Logo" width="62" height="62" loading="lazy" decoding="async">
                        </picture>
                    </div>

                    <div class="footer-social-label">SOCIAL MEDIA :</div>
                    <div class="footer-social-icons">
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6285941018703' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="{{ $settings['instagram'] ?? 'https://instagram.com/skyubudsilverclass' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="{{ $settings['facebook'] ?? 'https://facebook.com' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://maps.google.com/maps?q={{ urlencode($settings['address'] ?? 'Jl. Tirta Tawar, Petulu, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571') }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Google Maps Location">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Quick Links</h4>
                    <div class="footer-accent-line"></div>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#philosophy">Our Workshop</a></li>
                        <li><a href="#stories">Articles</a></li>
                        <li><a href="#creations">Gallery</a></li>
                        <li><a href="#location">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Our Workshop -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Our Workshop</h4>
                    <div class="footer-accent-line"></div>
                    <ul class="footer-links">
                        <li><a href="#packages" onclick="openBookingModal(1)">Single Package</a></li>
                        <li><a href="#packages" onclick="openBookingModal(2)">Couple Package</a></li>
                        <li><a href="#packages" onclick="openBookingModal(3)">Family Package</a></li>
                        <li><a href="#packages" onclick="openBookingModal(4)">Group Package</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Us -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Contact Us</h4>
                    <div class="footer-accent-line"></div>
                    <div class="footer-contact-list">
                        <div class="footer-contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:{{ $settings['whatsapp_number'] ?? '+6285941018703' }}">
                                {{ $settings['whatsapp_display'] ?? '+62 859-4101-8703' }}
                            </a>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:{{ $settings['email'] ?? 'starubud@gmail.com' }}">
                                {{ $settings['email'] ?? 'starubud@gmail.com' }}
                            </a>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>{{ $settings['address'] ?? 'Jl. Tirta Tawar, Petulu, Kecamatan Ubud, Kabupaten Gianyar, Bali 80571' }}</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright Bar -->
            <div class="footer-bottom">
                <p class="footer-copyright">
                    Star Ubud Silver Class &copy; {{ date('Y') }}
                </p>
            </div>
        </div>
    </footer>

    <!-- Optimized JavaScript -->
    <script>
        // Debounced Scroll Navbar
        let ticking = false;
        const nav = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    if (window.scrollY > 40) {
                        nav.classList.add('scrolled');
                    } else {
                        nav.classList.remove('scrolled');
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
            });
        });

        // FAQ Accordion
        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        }

        // Booking Modal
        function openBookingModal(packageId = null) {
            const modal = document.getElementById('bookingModal');
            modal.classList.add('open');
            if (packageId) {
                const sel = document.getElementById('pkgSelect');
                sel.value = packageId;
                updatePriceCalculator();
            }
        }

        function closeBookingModal() {
            document.getElementById('bookingModal').classList.remove('open');
        }

        document.getElementById('bookingModal').addEventListener('click', (e) => {
            if (e.target.id === 'bookingModal') {
                closeBookingModal();
            }
        });

        // Price Calculator
        function updatePriceCalculator() {
            const sel = document.getElementById('pkgSelect');
            const opt = sel.options[sel.selectedIndex];
            const basePrice = parseInt(opt.dataset.price || 500000);
            const slug = opt.dataset.slug || 'single';
            const minGuests = parseInt(opt.dataset.min || 1);
            
            const numInput = document.getElementById('numPeople');
            let guests = parseInt(numInput.value || 1);
            if (guests < minGuests && (slug === 'group' || slug === 'couple' || slug === 'family')) {
                numInput.min = minGuests;
            } else {
                numInput.min = 1;
            }

            let total = basePrice;
            if (slug === 'single') {
                total = basePrice * Math.max(1, guests);
            } else if (slug === 'group') {
                total = basePrice * Math.max(minGuests, guests);
            }

            document.getElementById('priceDisplay').textContent = 'IDR ' + total.toLocaleString('id-ID');
        }

        // Booking Submit
        async function handleBookingSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Reserving...';
            btn.disabled = true;

            const form = document.getElementById('reservationForm');
            const formData = new FormData(form);

            try {
                const response = await fetch('{{ route("booking.store") }}', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json' },
                    body: formData
                });

                const data = await response.json();
                if (data.success && data.whatsapp_url) {
                    btn.innerHTML = '<i class="fa-solid fa-check"></i> Redirecting to WhatsApp...';
                    window.open(data.whatsapp_url, '_blank');
                    setTimeout(() => {
                        closeBookingModal();
                        btn.innerHTML = originalHtml;
                        btn.disabled = false;
                        alert('🎉 Thank you! Your booking code is ' + data.booking_code + '. We have opened WhatsApp to confirm your slot.');
                    }, 400);
                } else {
                    alert('Please check your inputs and try again.');
                    btn.innerHTML = originalHtml;
                    btn.disabled = false;
                }
            } catch (err) {
                form.submit();
            }
        }

        // Full-Bleed Hero Background Slider Logic
        (function initHeroBgSlider() {
            const slides = document.querySelectorAll('.hero-bg-slide');
            const prevBtn = document.getElementById('heroPrevBtn');
            const nextBtn = document.getElementById('heroNextBtn');
            if (!slides.length) return;

            let currentSlide = 0;
            let slideInterval;

            function showSlide(index) {
                if (index < 0) {
                    currentSlide = slides.length - 1;
                } else if (index >= slides.length) {
                    currentSlide = 0;
                } else {
                    currentSlide = index;
                }

                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === currentSlide);
                });
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            function prevSlide() {
                showSlide(currentSlide - 1);
            }

            function startTimer() {
                stopTimer();
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopTimer() {
                if (slideInterval) clearInterval(slideInterval);
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    nextSlide();
                    startTimer();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    prevSlide();
                    startTimer();
                });
            }

            const heroSection = document.getElementById('home');
            if (heroSection) {
                heroSection.addEventListener('mouseenter', stopTimer);
                heroSection.addEventListener('mouseleave', startTimer);

                // Touch swipe support for mobile
                let touchStartX = 0;
                let touchEndX = 0;
                heroSection.addEventListener('touchstart', (e) => {
                    touchStartX = e.changedTouches[0].screenX;
                    stopTimer();
                }, { passive: true });

                heroSection.addEventListener('touchend', (e) => {
                    touchEndX = e.changedTouches[0].screenX;
                    if (touchStartX - touchEndX > 50) {
                        nextSlide();
                    } else if (touchEndX - touchStartX > 50) {
                        prevSlide();
                    }
                    startTimer();
                }, { passive: true });
            }

            startTimer();
        })();

        // Interactive Testimonials Carousel & Progress Track
        (function() {
            const testiViewport = document.getElementById('testiViewport');
            const testiPrevBtn = document.getElementById('testiPrevBtn');
            const testiNextBtn = document.getElementById('testiNextBtn');
            const testiProgressThumb = document.getElementById('testiProgressThumb');

            if (!testiViewport) return;

            function updateTestiProgress() {
                if (!testiProgressThumb) return;
                const scrollLeft = testiViewport.scrollLeft;
                const maxScroll = testiViewport.scrollWidth - testiViewport.clientWidth;
                if (maxScroll <= 0) {
                    testiProgressThumb.style.left = '0%';
                    testiProgressThumb.style.width = '100%';
                    return;
                }
                const ratio = Math.max(0, Math.min(1, scrollLeft / maxScroll));
                const thumbWidth = 35; // 35%
                const maxLeft = 100 - thumbWidth;
                testiProgressThumb.style.width = thumbWidth + '%';
                testiProgressThumb.style.left = (ratio * maxLeft) + '%';
            }

            testiViewport.addEventListener('scroll', updateTestiProgress, { passive: true });

            if (testiPrevBtn) {
                testiPrevBtn.addEventListener('click', () => {
                    const scrollAmount = window.innerWidth < 640 ? 300 : 360;
                    testiViewport.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });
            }

            if (testiNextBtn) {
                testiNextBtn.addEventListener('click', () => {
                    const scrollAmount = window.innerWidth < 640 ? 300 : 360;
                    testiViewport.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
            }

            // Drag to scroll
            let isDown = false;
            let startX;
            let scrollLeftPos;

            testiViewport.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - testiViewport.offsetLeft;
                scrollLeftPos = testiViewport.scrollLeft;
            });

            window.addEventListener('mouseup', () => {
                isDown = false;
            });

            testiViewport.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - testiViewport.offsetLeft;
                const walk = (x - startX) * 1.6;
                testiViewport.scrollLeft = scrollLeftPos - walk;
            });

            window.addEventListener('resize', updateTestiProgress);
            setTimeout(updateTestiProgress, 100);
        })();

        // Booking Modal Functions
        function openBookingModal(pkgId = null) {
            const modal = document.getElementById('bookingModal');
            const select = document.getElementById('pkgSelect');
            if (pkgId && select) {
                for (let i = 0; i < select.options.length; i++) {
                    if (select.options[i].value == pkgId) {
                        select.selectedIndex = i;
                        break;
                    }
                }
            }
            updatePriceCalculator();
            if (modal) {
                modal.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeBookingModal() {
            const modal = document.getElementById('bookingModal');
            if (modal) {
                modal.classList.remove('open');
                document.body.style.overflow = '';
            }
        }

        function updatePriceCalculator() {
            const select = document.getElementById('pkgSelect');
            const priceDisplay = document.getElementById('priceDisplay');
            if (!select || !priceDisplay) return;
            const opt = select.options[select.selectedIndex];
            if (opt) {
                const label = opt.getAttribute('data-label') || ('Rp ' + Number(opt.getAttribute('data-price')).toLocaleString('id-ID'));
                priceDisplay.textContent = label;
            }
        }

        function handleBookingSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const name = form.customer_name.value.trim();
            const select = document.getElementById('pkgSelect');
            const pkgName = select.options[select.selectedIndex].getAttribute('data-name') || select.options[select.selectedIndex].text.trim();
            const date = form.booking_date.value;
            const notes = form.special_requests.value.trim();
            const priceDisplay = document.getElementById('priceDisplay').textContent.trim();

            const waText = `Hello Star Ubud Silver Class!\n\nI would like to book a silver jewelry workshop session:\n- *Name:* ${name}\n- *Package:* ${pkgName}\n- *Price:* ${priceDisplay}\n- *Date:* ${date}${notes ? `\n- *Notes:* ${notes}` : ''}\n\nPlease confirm availability. Thank you!`;

            const waNumber = "{{ $settings['whatsapp_number'] ?? '6285941018703' }}";
            window.open(`https://wa.me/${waNumber}?text=${encodeURIComponent(waText)}`, '_blank');
            closeBookingModal();
        }
    </script>
</body>
</html>
