<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Booking;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'SKY Ubud Admin',
                'password' => Hash::make('admin'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Packages
        $single = Package::updateOrCreate(
            ['slug' => 'single'],
            [
                'name' => 'Single Package',
                'price' => 500000,
                'price_label' => 'Rp500.000/Person',
                'min_persons' => 1,
                'silver_grams' => '1–5 grams of pure silver',
                'duration' => '1–2 hours',
                'tagline' => 'A personal creative experience.',
                'description' => 'Perfect for solo travelers and individual experiences.',
                'inclusions' => [
                    'Pure silver 1–5 grams',
                    'Professional silversmith guidance',
                    'Mineral water',
                    'Coffee or Tea',
                    'Your handmade silver jewelry to take home',
                    'Class duration: 1–2 hours.',
                ],
                'badge' => 'Personal Choice',
                'is_featured' => false,
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        $couple = Package::updateOrCreate(
            ['slug' => 'couple'],
            [
                'name' => 'Couple Package',
                'price' => 950000,
                'price_label' => 'Rp950.000/2 Persons',
                'min_persons' => 2,
                'silver_grams' => '1–10 grams of pure silver in total',
                'duration' => '1–2 hours',
                'tagline' => 'Two people. Two creations. One beautiful memory.',
                'description' => 'Perfect for honeymooners and couples visiting Bali.',
                'inclusions' => [
                    'Pure silver 1–10 grams',
                    'Professional silversmith guidance',
                    'Mineral water',
                    'Coffee or Tea',
                    'Your handmade silver jewelry to take home',
                    'Class duration: 1–2 hours.',
                    'Romantic and memorable experience for couples',
                ],
                'badge' => 'Most Popular',
                'is_featured' => true,
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        $family = Package::updateOrCreate(
            ['slug' => 'family'],
            [
                'name' => 'Family Package',
                'price' => 1900000,
                'price_label' => 'Rp1.900.000/4 Persons',
                'min_persons' => 4,
                'silver_grams' => '1–20 grams of pure silver in total',
                'duration' => '1–2 hours',
                'tagline' => 'Create memories together.',
                'description' => 'Special package for families who want to enjoy quality time together while creating silver jewelry. Please contact us for family package arrangements.',
                'inclusions' => [
                    'Pure silver 1–20 grams',
                    'Professional silversmith guidance',
                    'Mineral water',
                    'Coffee or Tea',
                    'Class duration: 1–2 hours.',
                    'Comfortable for children',
                    'Family-friendly atmosphere',
                    'Your handmade silver jewelry to take home',
                ],
                'badge' => 'Family Choice',
                'is_featured' => false,
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        $group = Package::updateOrCreate(
            ['slug' => 'group'],
            [
                'name' => 'Group Package',
                'price' => 450000,
                'price_label' => 'Rp450.000/Person (Min. 6)',
                'min_persons' => 6,
                'silver_grams' => 'Pure silver materials',
                'duration' => '1–2 hours',
                'tagline' => 'Create together. Remember together.',
                'description' => 'Perfect for group tours, company trips, student groups, and friends traveling together.',
                'inclusions' => [
                    'Pure silver materials',
                    'Professional silversmith guidance',
                    'Mineral water',
                    'Your handmade silver jewelry to take home',
                    'Class duration: 1–2 hours.',
                    'Comfortable group setting.',
                    'Coffee or Tea',
                    'Take-home jewelry',
                ],
                'badge' => 'Best For Groups',
                'is_featured' => false,
                'sort_order' => 4,
                'is_active' => true,
            ]
        );

        // 3. FAQs
        $faqs = [
            [
                'question' => 'How long does the silver class take?',
                'answer' => 'The experience takes approximately 1–2 hours from initial design sketching, shaping, soldering, polishing to the final sparkling masterpiece.',
                'sort_order' => 1,
            ],
            [
                'question' => 'Do I need previous experience?',
                'answer' => 'No prior experience is required! Our skilled master Balinese silversmiths provide gentle step-by-step guidance suitable for complete beginners, couples, and children.',
                'sort_order' => 2,
            ],
            [
                'question' => 'What jewelry can I make?',
                'answer' => 'You can choose to craft a sterling silver ring, bracelet, or pendant necklace, depending on your chosen package and silver allowance.',
                'sort_order' => 3,
            ],
            [
                'question' => 'Can I create my own design?',
                'answer' => 'Yes! You can choose from our curated studio catalog of traditional & modern Balinese motifs, or bring your own sketch/inspirational photo, and our artisans will guide you in bringing it to life.',
                'sort_order' => 4,
            ],
            [
                'question' => 'Is the silver included?',
                'answer' => 'Yes. Each package includes authentic certified 925 pure silver (1–5g per person for Single & Group, 2–10g for Couple, and 4–20g for Family). Extra silver is available on request at nominal cost.',
                'sort_order' => 5,
            ],
            [
                'question' => 'Can I take my jewelry home?',
                'answer' => 'Yes! Your finished, polished jewelry is 100% yours to wear and take home right after the session in an elegant protective jewelry pouch.',
                'sort_order' => 6,
            ],
            [
                'question' => 'Where are you located?',
                'answer' => 'We are conveniently located on Jl. Jembawan, Ubud, Bali — just minutes from central Ubud, surrounded by tranquil tropical lush greenery.',
                'sort_order' => 7,
            ],
            [
                'question' => 'How can I book?',
                'answer' => 'You can book directly via our online instant booking form on this website, or reach out to us directly through WhatsApp for immediate reservation confirmation.',
                'sort_order' => 8,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'category' => 'General',
                    'sort_order' => $faq['sort_order'],
                    'is_active' => true,
                ]
            );
        }

        // 4. Testimonials
        $testimonials = [
            [
                'customer_name' => 'Ryan Almeida',
                'country_or_city' => 'Sydney, Australia',
                'rating' => 5,
                'review' => 'Absolutely one of the best activities we did in Ubud! The silversmith patiently guided us through melting, hammering, and polishing our pure silver bands. Highly recommended for couples!',
                'item_crafted' => 'Custom Hammered Silver Ring',
                'sort_order' => 1,
            ],
            [
                'customer_name' => 'Blossom Menezes',
                'country_or_city' => 'London, United Kingdom',
                'rating' => 5,
                'review' => 'Such a therapeutic and creative morning surrounded by Bali lush nature. I created a delicate silver butterfly pendant that I wear every single day. Incredible value and master craftsmanship.',
                'item_crafted' => 'Sterling Silver Butterfly Pendant',
                'sort_order' => 2,
            ],
            [
                'customer_name' => 'Sarah & David Jenkins',
                'country_or_city' => 'Melbourne, Australia',
                'rating' => 5,
                'review' => 'The highlight of our 2 weeks in Bali! We made each other custom wedding-band style silver rings with Balinese wave carvings. The instructor Wayan was so patient and knowledgeable. Absolutely unforgettable.',
                'item_crafted' => 'Couple Matching Wave Rings',
                'sort_order' => 3,
            ],
            [
                'customer_name' => 'Elena Rostova',
                'country_or_city' => 'Amsterdam, Netherlands',
                'rating' => 5,
                'review' => 'A magical experience in Ubud. As a solo traveler, I felt so welcomed. I made an intricate lotus flower pendant with pure silver. Every time I wear it, I remember the peaceful breeze of Jl. Jembawan.',
                'item_crafted' => 'Sterling Silver Lotus Pendant',
                'sort_order' => 4,
            ],
            [
                'customer_name' => 'The Miller Family',
                'country_or_city' => 'California, USA',
                'rating' => 5,
                'review' => 'Our kids (ages 11 & 14) loved every second of shaping the silver with the mini hammers and torches under safe guidance. Best souvenir we have ever taken home from our family vacation!',
                'item_crafted' => '4 Custom Silver Bracelets & Rings',
                'sort_order' => 5,
            ],
            [
                'customer_name' => 'Kenji & Mei Takahashi',
                'country_or_city' => 'Tokyo, Japan',
                'rating' => 5,
                'review' => 'Outstanding craftsmanship and beautiful open workshop. The silver is very high quality and shiny. Excellent guidance in English and a memory to treasure forever.',
                'item_crafted' => 'Balinese Filigree Cuff Bracelet',
                'sort_order' => 6,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['customer_name' => $t['customer_name']],
                $t
            );
        }

        // 5. Articles
        $articles = [
            [
                'title' => 'This Is Why You Must Try Star Ubud Silver Class for the Perfect Creative Experience 5',
                'slug' => 'this-is-why-you-must-try-star-ubud-silver-class-5',
                'excerpt' => 'Seminyak is famous for its vibrant beach clubs, high-end boutiques, and world-class dining. But when the bustling streets and beach crowds leave you craving something deeply authentic and creative, a journey to our tranquil studio in Ubud offers the perfect contrast.',
                'content' => 'Discover how crafting your own silver jewelry in Ubud transforms your Bali vacation into an unforgettable artistic journey. Learn step-by-step techniques from master silversmiths.',
                'image' => 'images/happy_participants.jpg',
                'author' => 'Star Ubud Team',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'A Romantic Escape in Ubud: Crafting Your Own Love Story in Silver 5',
                'slug' => 'a-romantic-escape-in-ubud-crafting-your-own-love-story-5',
                'excerpt' => 'When people think of a romantic getaway to Bali, images of candlelit dinners in Seminyak or sunset walks along the beaches of Uluwatu often come to mind. But creating custom matching rings together creates a memory that lasts forever.',
                'content' => 'Couples from around the world visit our Ubud silver workshop to shape, engrave, and polish each other’s rings. It is an intimate, memorable, and bonding experience like no other.',
                'image' => 'images/happy_creators_rings.jpg',
                'author' => 'Star Ubud Team',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'This Is Why You Must Try Star Ubud Silver Class for the Perfect Creative Experience 4',
                'slug' => 'this-is-why-you-must-try-star-ubud-silver-class-4',
                'excerpt' => 'Seminyak is famous for its vibrant beach clubs, high-end boutiques, and world-class dining. But when the bustling streets and beach crowds leave you craving hands-on craftsmanship, step into the peaceful world of traditional silver artistry.',
                'content' => 'From melting pure 925 silver grains to hammering textured facets and setting personal gemstones, explore what makes our workshops in Ubud so beloved by travelers worldwide.',
                'image' => 'images/artisan_rolling_mill.jpg',
                'author' => 'Star Ubud Team',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($articles as $a) {
            Article::updateOrCreate(
                ['slug' => $a['slug']],
                $a
            );
        }

        // 6. Site Settings
        $settings = [
            ['key' => 'site_title', 'label' => 'Site Title', 'value' => 'SKY Ubud Silver Class', 'group' => 'general'],
            ['key' => 'tagline', 'label' => 'Tagline', 'value' => 'CREATE YOUR STORY. CRAFT YOUR MEMORY. WEAR YOUR MASTERPIECE.', 'group' => 'general'],
            ['key' => 'address', 'label' => 'Workshop Address', 'value' => 'Jl. Jembawan, Ubud, Gianyar, Bali 80571', 'group' => 'contact'],
            ['key' => 'whatsapp_number', 'label' => 'WhatsApp Number (Intl)', 'value' => '6281234567890', 'group' => 'contact'],
            ['key' => 'whatsapp_display', 'label' => 'WhatsApp Display', 'value' => '+62 812-3456-7890', 'group' => 'contact'],
            ['key' => 'email', 'label' => 'Contact Email', 'value' => 'info@ubudbestsilverclass.com', 'group' => 'contact'],
            ['key' => 'instagram', 'label' => 'Instagram URL', 'value' => 'https://instagram.com/skyubudsilverclass', 'group' => 'social'],
            ['key' => 'opening_hours', 'label' => 'Studio Hours', 'value' => 'Daily: 09:00 AM – 07:00 PM', 'group' => 'general'],
            ['key' => 'domain_name', 'label' => 'Official Domain', 'value' => 'ubudbestsilverclass.com', 'group' => 'general'],
        ];

        foreach ($settings as $s) {
            SiteSetting::set($s['key'], $s['value'], $s['label'], $s['group']);
        }

        // 6. Sample Bookings for Admin demonstration
        Booking::updateOrCreate(
            ['booking_code' => 'SKY-260920-L9A1'],
            [
                'package_id' => $couple->id,
                'package_name' => 'COUPLE',
                'customer_name' => 'Liam & Charlotte Smith',
                'customer_email' => 'liam.smith@example.com',
                'customer_phone' => '+61412345678',
                'booking_date' => now()->addDays(2)->format('Y-m-d'),
                'session_time' => '11:30 AM',
                'num_people' => 2,
                'jewelry_choice' => 'Silver Ring',
                'special_requests' => 'Anniversary gift creation, would love Balinese engraving assistance',
                'total_price' => 950000,
                'status' => 'confirmed',
                'payment_status' => 'paid',
                'admin_notes' => 'Assigned workbench 1 with Master Silversmith Made',
            ]
        );

        Booking::updateOrCreate(
            ['booking_code' => 'SKY-260920-K7B3'],
            [
                'package_id' => $single->id,
                'package_name' => 'SINGLE',
                'customer_name' => 'Jessica Wong',
                'customer_email' => 'jessica.wong@example.com',
                'customer_phone' => '+6598765432',
                'booking_date' => now()->addDays(1)->format('Y-m-d'),
                'session_time' => '02:00 PM',
                'num_people' => 1,
                'jewelry_choice' => 'Silver Pendant',
                'special_requests' => 'Wants to make a sunburst & sky cloud pendant design',
                'total_price' => 500000,
                'status' => 'pending',
                'payment_status' => 'unpaid',
                'admin_notes' => 'Customer inquired via WhatsApp about bringing custom gemstone',
            ]
        );
    }
}
