<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Booking;
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

        // 3. Testimonials
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

        // 4b. Galleries
        $galleries = [
            [
                'title' => 'Artisan Rolling Mill & Guidance',
                'category' => 'workshop',
                'image_path' => 'images/artisan_rolling_mill.jpg',
                'caption' => 'Master silversmith guiding the precision silver flattening process.',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Sterling Silver Butterfly Ring',
                'category' => 'ring',
                'image_path' => 'images/butterfly_ring_ricefield.jpg',
                'caption' => 'Handcrafted silver butterfly ring overlooking the Ubud rice terrace breeze.',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Hammered 925 Silver Bands',
                'category' => 'ring',
                'image_path' => 'images/bespoke_silver_rings.jpg',
                'caption' => 'Custom faceted pure silver rings made during couple workshop.',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Smiling Jewelry Creators',
                'category' => 'participants',
                'image_path' => 'images/happy_creators_rings.jpg',
                'caption' => 'Happy guests showing off their newly polished silver creations.',
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Hands-on Silversmithing Session',
                'category' => 'workshop',
                'image_path' => 'images/happy_participants.jpg',
                'caption' => 'Step-by-step guidance in our open-air tranquil Ubud studio.',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Cherished Ubud Masterpieces',
                'category' => 'ring',
                'image_path' => 'images/silver_creations_trio.jpg',
                'caption' => 'Three bespoke finished silver pieces ready to take home.',
                'is_featured' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($galleries as $g) {
            Gallery::updateOrCreate(
                ['title' => $g['title']],
                $g
            );
        }

        // 5. Articles (Rich SEO Content matching screenshot)
        $articles = [
            [
                'title' => 'This Is Why You Must Try Star Ubud Silver Class for the Perfect Creative Experience 5',
                'slug' => 'this-is-why-you-must-try-star-ubud-silver-class-for-the-perfect-creative-experience-5',
                'excerpt' => 'Seminyak is famous for its vibrant beach clubs, high-end boutiques, and world-class dining. But when the bustling streets and beach crowds leave you craving a deeper, more meaningful connection to Bali’s artistic soul, where should you go?',
                'content' => '<p>Seminyak is famous for its vibrant beach clubs, high-end boutiques, and world-class dining. But when the bustling streets and beach crowds leave you craving a deeper, more meaningful connection to Bali\'s artistic soul, where should you go?</p>
<p>The answer lies just a short drive away in the cultural heart of the island. If you are looking for the ultimate creative breakthrough on your holiday, here is why you must swap the beach for a day and experience <strong>Star Ubud Silver Class</strong>.</p>
<div class="article-body-img-wrap"><img src="/images/hero_silver_craft.jpg" alt="Silver Class Workshop Ubud" class="article-body-img" loading="lazy"></div>
<h3>1. Escape the Bustle for Stunning Rice Field Views</h3>
<p>While Seminyak offers beautiful ocean horizons, nothing matches the tranquil, grounding atmosphere of authentic Ubud rice terraces. Star Ubud Silver Class is uniquely situated in a peaceful location surrounded by lush, green rice field views. The calm breeze and relaxing environment provide the perfect, undistracted backdrop to unlock your creativity and clear your mind.</p>
<h3>2. Learn Directly from Master Balinese Silversmiths</h3>
<p>You won\'t just be following a generic DIY kit. At our studio, you get the rare privilege of learning directly from skilled local silversmiths with years of experience in traditional Balinese silver crafting. To make your experience smooth and enjoyable, our friendly instructors communicate exceptionally well in English. They will guide you through every traditional technique—from raw material to polished art—making the class easy and fun for everyone.</p>
<h3>3. Crafted for Everyone: Solo, Couples, and Families</h3>
<p>Whether you are exploring Bali independently, on a romantic getaway, or traveling with your children, there is a tailored space for you.</p>
<ul>
<li><strong>Single Package (IDR 450K):</strong> Perfect for solo travelers seeking an immersive, meditative craft session.</li>
<li><strong>Couple Package (IDR 900K):</strong> A romantic and memorable bonding experience designed for honeymoons and couples.</li>
<li><strong>Family Package (IDR 1.800K):</strong> Create matching heirlooms together with dedicated artisan guidance for all ages.</li>
<li><strong>Group Package (IDR 400K/p):</strong> Fun collaborative group workshop with shared creative memories.</li>
</ul>
<p>Ready to make your own jewelry? Reserve your spot today and bring home a real piece of Bali!</p>',
                'image' => 'images/happy_participants.jpg',
                'author' => 'Star Ubud Silver Class',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 1,
                'meta_title' => 'This Is Why You Must Try Star Ubud Silver Class for the Perfect Creative Experience',
                'meta_description' => 'Discover why Star Ubud Silver Class is the best jewelry making workshop in Bali. Escape the bustle, learn authentic Balinese techniques, and craft pure silver rings.',
                'meta_keywords' => 'silver class ubud, silver jewelry making bali, jewelry workshop ubud, star ubud silver class, bali artisan craft',
                'reading_time' => 5,
            ],
            [
                'title' => 'A Romantic Escape in Ubud: Crafting Your Own Love Story in Silver 5',
                'slug' => 'a-romantic-escape-in-ubud-crafting-your-own-love-story-in-silver-5',
                'excerpt' => 'When people think of a romantic getaway to Bali, images of candlelit dinners in Seminyak or sunset walks often come to mind. But creating custom matching rings together creates a memory that lasts forever.',
                'content' => '<p>When people think of a romantic getaway to Bali, images of candlelit dinners in Seminyak or sunset walks along the beaches of Uluwatu often come to mind. But creating custom matching rings together creates a memory that lasts forever.</p>
<p>At Star Ubud Silver Class, couples have the opportunity to design and forge sterling silver jewelry for one another under the expert guidance of master silversmiths.</p>
<div class="article-body-img-wrap"><img src="/images/happy_creators_rings.jpg" alt="Romantic Silver Class Couples" class="article-body-img" loading="lazy"></div>
<h3>Handcrafting Bonds That Last</h3>
<p>From choosing authentic Balinese carved motifs to soldering and polishing the metal to a mirror shine, each step is a moment shared together amidst the tranquil Ubud greenery.</p>',
                'image' => 'images/happy_creators_rings.jpg',
                'author' => 'Star Ubud Silver Class',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 2,
                'meta_title' => 'A Romantic Escape in Ubud: Crafting Your Own Love Story in Silver',
                'meta_description' => 'Explore the ultimate romantic couples activity in Ubud: creating bespoke silver rings together in an authentic Balinese studio.',
                'meta_keywords' => 'couples silver class ubud, romantic activities bali, make wedding rings bali, jewelry class couples',
                'reading_time' => 4,
            ],
            [
                'title' => 'This Is Why You Must Try Star Ubud Silver Class for the Perfect Creative Experience 4',
                'slug' => 'this-is-why-you-must-try-star-ubud-silver-class-for-the-perfect-creative-experience-4',
                'excerpt' => 'Seminyak is famous for its vibrant beach clubs, high-end boutiques, and world-class dining. But when the bustling streets and beach crowds leave you craving hands-on craftsmanship, step into the peaceful world of traditional silver artistry.',
                'content' => '<p>From melting pure 925 silver grains to hammering textured facets and setting personal gemstones, explore what makes our workshops in Ubud so beloved by travelers worldwide.</p>
<div class="article-body-img-wrap"><img src="/images/artisan_rolling_mill.jpg" alt="Artisan Silver Crafting" class="article-body-img" loading="lazy"></div>
<h3>Traditional Balinese Techniques</h3>
<p>Learn ancestral silversmith methods passed down through generations in Gianyar. Shape your raw silver into an exquisite piece you can wear every day.</p>',
                'image' => 'images/artisan_rolling_mill.jpg',
                'author' => 'Star Ubud Silver Class',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 3,
                'meta_title' => 'Why You Must Try Star Ubud Silver Class - Top Creative Activity',
                'meta_description' => 'Experience authentic silver craftsmanship in Bali. Complete step-by-step masterclass with genuine 925 pure silver.',
                'meta_keywords' => 'silver jewelry class bali, ubud workshop, balinese silversmithing',
                'reading_time' => 5,
            ],
            [
                'title' => 'A Romantic Escape in Ubud: Crafting Your Own Love Story in Silver 4',
                'slug' => 'a-romantic-escape-in-ubud-crafting-your-own-love-story-in-silver-4',
                'excerpt' => 'When people think of a romantic getaway to Bali, images of candlelit dinners in Seminyak or sunset walks along the beaches of Uluwatu often come to mind. However, if you and your partner are looking for something truly unique, intimate, and deeply grounded in island culture, the cultural heart of Ubud holds an unforgettable experience just waiting to be discovered.',
                'content' => '<p>When people think of a romantic getaway to Bali, images of candlelit dinners in Seminyak or sunset walks along the beaches of Uluwatu often come to mind. However, if you and your partner are looking for something truly unique, intimate, and deeply grounded in island culture, the cultural heart of Ubud holds an unforgettable experience just waiting to be discovered.</p>
<p class="article-quote">"Forget standard souvenirs bought from a shelf. Imagine sitting side-by-side with your partner, looking out over rolling green fields, and forging raw silver into a beautiful piece of jewelry that you will both wear forever."</p>
<p>Away from the crowded streets, tucked into a serene spot with panoramic views, <strong>Star Ubud Silver Class</strong> offers couples the perfect blend of artistic expression, tranquil romance, and Balinese tradition.</p>
<h3>The Vibe: Where Creativity Meets Nature</h3>
<p>The experience begins long before you touch any tools. As you arrive at the studio, you are greeted by the authentic, peaceful atmosphere of Ubud\'s iconic green rice terraces. The gentle rustle of leaves and the crisp breeze immediately set a relaxing, romantic tone. Unlike rushed tourist workshops, the environment here is calm and welcoming, allowing you and your loved one to fully escape the hustle and bustle.</p>
<p>To make things even sweeter, you\'ll be served complimentary mineral water, coffee, or hot tea as you settle down at your shared crafting station, ready to embark on a 1-to-2-hour creative journey.</p>
<h3>Guided by Master Artisans</h3>
<p>You don\'t need any prior jewelry-making skills to enjoy this. The workshop is fully guided by skilled local silversmiths with years of experience in traditional Balinese silver crafting. These patient instructors speak excellent English, ensuring that the process is easy, lighthearted, and fun.</p>
<p>Whether you decide to make matching couple rings, an elegant pendant, unique earrings, or a personalized bracelet, the silversmiths will guide your hands through every delicate step—from melting and hammering the pure silver to shaping, soldering, and polishing it to a brilliant shine.</p>
<h3>Featured Package: The Couple Experience</h3>
<p>Our Couple Package is specially curated for two people. It includes 2x pure 925 silver allowances, personalized guidance from a master artisan, welcoming drinks, and a keepsake protective jewelry pouch to take home.</p>',
                'image' => 'images/silver_creations_trio.jpg',
                'author' => 'Star Ubud Silver Class',
                'published_at' => '2026-05-25',
                'is_published' => true,
                'sort_order' => 4,
                'meta_title' => 'A Romantic Escape in Ubud: Crafting Your Own Love Story in Silver',
                'meta_description' => 'Discover the best couple jewelry workshop in Bali. Forge matching sterling silver rings in central Ubud.',
                'meta_keywords' => 'couples silver workshop, romantic bali activity, handmade ring class',
                'reading_time' => 4,
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
