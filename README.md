# ✨ SKY Ubud Silver Class — Laravel & Filament Web Application

A luxury, responsive web platform and booking management system for **SKY Ubud Silver Class** (located on *Jl. Jembawan, Ubud, Bali*). Built with **Laravel**, **Filament Admin Panel**, and **Vanilla CSS/JS** with rich Balinese artisan aesthetics.

Official Domain: **`ubudbestsilverclass.com`**  
Brand Identity: **SKY Ubud Silver Class — Create Your Story. Craft Your Memory. Wear Your Masterpiece.**

---

## 💎 Features & Structure

### 1. 🌟 Luxury Customer-Facing Website
- **Branded Hero Experience**: Showcases the official SKY Ubud logo, tagline, and artisan atmosphere.
- **Philosophy / "More Than a Souvenir"**: Highlights the deep value of crafting wearable memories with 92.5% pure silver.
- **Creative Journey (5-Stage Visual Workflow)**:
  - `01 — Choose Your Jewelry`
  - `02 — Create Your Design`
  - `03 — Experience Traditional Craftsmanship`
  - `04 — Shape Your Masterpiece`
  - `05 — Take Your Memory Home`
- **What Will You Create?**: Interactive showcase for **Silver Rings**, **Silver Bracelets**, and **Silver Pendants**.
- **Packages & Pricing Cards**:
  - `SINGLE`: IDR 500K / Person (1–5g pure silver)
  - `COUPLE`: IDR 950K / 2 People (2–10g pure silver)
  - `FAMILY`: IDR 1,900K / 4 People (4–20g pure silver)
  - `GROUP`: IDR 450K / Person (Min 7 people)
- **Why SKY Ubud Silver Class**: Key highlights (Traditional Balinese Craftsmanship, Designed by You, Perfect for Beginners, Wearable Memory, For Everyone).
- **Guest Testimonials & 5-Star Reviews**: Stories from global travelers.
- **Interactive FAQ Accordion**: 8 essential questions & answers.
- **Studio Location & Interactive Map**: Jl. Jembawan, Ubud, Bali + Google Maps direction integration.
- **Instant Booking Engine**: Dynamic price calculation, real-time participant counter, database persistence, and automated WhatsApp formatted message generation.
- **Floating WhatsApp Quick Button**: Direct contact with Ubud master silversmiths.

---

### 2. 🛡️ Filament Admin Panel
Accessible via: **`/admin`** (e.g. `http://localhost:8000/admin` or `http://localhost:8008/admin`)

#### Admin Login Credentials:
- **Email:** `admin@gmail.com`
- **Password:** `admin`

#### Admin Capabilities:
- **📊 Dashboard Stats Widget**: Total reservations, pending actions, confirmed classes, and total revenue.
- **📅 Bookings Management**: View all customer reservations, filter by status (Pending, Confirmed, Completed, Cancelled) & payment status (Unpaid, Deposit Paid, Paid), and one-click WhatsApp client contact.
- **📦 Packages Management**: Modify pricing, titles, silver allowance (grams), durations, badges, and dynamic inclusions.
- **❓ FAQs Management**: Add, edit, and reorder questions and answers.
- **⭐ Testimonials Management**: Manage guest reviews, star ratings, origin countries, and items crafted.
- **🖼️ Gallery Management**: Organize studio, jewelry, and participant photos.
- **⚙️ Site Settings**: Edit studio address, WhatsApp phone numbers, operating hours, and domain info.

---

## 🚀 Getting Started

### 1. Requirements
- **PHP 8.2+** (with `pdo_sqlite` or `pdo_mysql`, `mbstring`, `intl`, `fileinfo`, `gd`)
- **Composer**

### 2. Running Locally
```bash
# Navigate to the project
cd sky_silver_class

# Run database migrations and seeders (already pre-seeded)
php artisan migrate --seed

# Start the development server
php artisan serve
```

Open your browser:
- **Public Website:** `http://localhost:8000`
- **Admin Panel:** `http://localhost:8000/admin`

---

## 📍 Workshop Details
- **Location:** Jl. Jembawan, Ubud, Gianyar, Bali 80571
- **Opening Hours:** Daily 09:00 AM – 07:00 PM
- **Domain:** `ubudbestsilverclass.com`
