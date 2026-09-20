<?php

namespace Database\Seeders;

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
                'name' => 'SINGLE',
                'price' => 500000,
                'price_label' => 'IDR 500K / PERSON',
                'min_persons' => 1,
                'silver_grams' => '1–5 grams of pure silver',
                'duration' => '1–2 hours',
                'tagline' => 'A personal creative experience.',
                'description' => 'Create your own silver ring, bracelet, or pendant and discover the joy of making something with your own hands.',
                'inclusions' => [
                    '1–5 grams of pure silver',
                    'Ring, bracelet, or pendant',
                    'Simple design of your choice',
                    'Guidance from an experienced silversmith',
                    'Traditional Balinese silver-making techniques',
                    'Finished jewelry to take home',
                    '1–2 hours of experience',
                ],
                'badge' => 'Personal Favorite',
                'is_featured' => false,
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        $couple = Package::updateOrCreate(
            ['slug' => 'couple'],
            [
                'name' => 'COUPLE',
                'price' => 950000,
                'price_label' => 'IDR 950K / 2 PEOPLE',
                'min_persons' => 2,
                'silver_grams' => '2–10 grams of pure silver in total',
                'duration' => '1–2 hours',
                'tagline' => 'Two people. Two creations. One beautiful memory.',
                'description' => 'Share a meaningful experience with someone special and create your own handmade silver jewelry together.',
                'inclusions' => [
                    '2–10 grams of pure silver in total',
                    'One jewelry piece per person',
                    'Ring, bracelet, or pendant',
                    'Simple designs of your choice',
                    'Guidance from an experienced silversmith',
                    'Traditional Balinese silver-making techniques',
                    'Finished jewelry to take home',
                    '1–2 hours of experience',
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
                'name' => 'FAMILY',
                'price' => 1900000,
                'price_label' => 'IDR 1,900K / 4 PEOPLE',
                'min_persons' => 4,
                'silver_grams' => '4–20 grams of pure silver in total',
                'duration' => '1–2 hours',
                'tagline' => 'Create memories together.',
                'description' => 'Enjoy a creative family activity where everyone can make their own silver jewelry and take home a special reminder of your time in Bali.',
                'inclusions' => [
                    '4–20 grams of pure silver in total',
                    'One jewelry piece per person',
                    'Ring, bracelet, or pendant',
                    'Simple designs of your choice',
                    'Guidance from an experienced silversmith',
                    'Traditional Balinese silver-making techniques',
                    'Finished jewelry to take home',
                    '1–2 hours of experience',
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
                'name' => 'GROUP',
                'price' => 450000,
                'price_label' => 'IDR 450K / PERSON',
                'min_persons' => 7,
                'silver_grams' => '1–5 grams of pure silver per person',
                'duration' => '1–2 hours',
                'tagline' => 'Create together. Remember together.',
                'description' => 'A fun and meaningful experience for friends, celebrations, tour groups, and special occasions. (Minimum 7 people)',
                'inclusions' => [
                    '1–5 grams of pure silver per person',
                    'Ring, bracelet, or pendant',
                    'Simple design of your choice',
                    'Guidance from an experienced silversmith',
                    'Traditional Balinese silver-making techniques',
                    'Finished jewelry to take home',
                    '1–2 hours of experience',
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
                'customer_name' => 'Sarah & David Jenkins',
                'country_or_city' => 'Melbourne, Australia',
                'rating' => 5,
                'review' => 'The highlight of our 2 weeks in Bali! We made each other custom wedding-band style silver rings with Balinese wave carvings. The instructor Wayan was so patient and knowledgeable. Absolutely unforgettable.',
                'item_crafted' => 'Couple Matching Wave Rings',
                'sort_order' => 1,
            ],
            [
                'customer_name' => 'Elena Rostova',
                'country_or_city' => 'Amsterdam, Netherlands',
                'rating' => 5,
                'review' => 'A magical experience in Ubud. As a solo traveler, I felt so welcomed. I made an intricate lotus flower pendant with pure silver. Every time I wear it, I remember the peaceful breeze of Jl. Jembawan.',
                'item_crafted' => 'Sterling Silver Lotus Pendant',
                'sort_order' => 2,
            ],
            [
                'customer_name' => 'The Miller Family',
                'country_or_city' => 'California, USA',
                'rating' => 5,
                'review' => 'Our kids (ages 11 & 14) loved every second of shaping the silver with the mini hammers and torches under safe guidance. Best souvenir we have ever taken home from our family vacation!',
                'item_crafted' => '4 Custom Silver Bracelets & Rings',
                'sort_order' => 3,
            ],
            [
                'customer_name' => 'Kenji & Mei Takahashi',
                'country_or_city' => 'Tokyo, Japan',
                'rating' => 5,
                'review' => 'Outstanding craftsmanship and beautiful open workshop. The silver is very high quality and shiny. Excellent value for money in Ubud!',
                'item_crafted' => 'Balinese Filigree Cuff Bracelet',
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['customer_name' => $t['customer_name']],
                $t
            );
        }

        // 5. Site Settings
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
