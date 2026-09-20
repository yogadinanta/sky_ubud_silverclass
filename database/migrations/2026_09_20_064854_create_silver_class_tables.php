<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // SINGLE, COUPLE, FAMILY, GROUP
            $table->string('slug')->unique();
            $table->unsignedInteger('price'); // in IDR (e.g., 500000)
            $table->string('price_label'); // e.g., "IDR 500K / PERSON"
            $table->unsignedInteger('min_persons')->default(1);
            $table->string('silver_grams')->default('1–5 grams of pure silver');
            $table->string('duration')->default('1–2 hours');
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->json('inclusions')->nullable();
            $table->string('badge')->nullable(); // e.g. "Best Value", "Popular"
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code')->unique();
            $table->foreignId('package_id')->nullable()->constrained('packages')->nullOnDelete();
            $table->string('package_name');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->date('booking_date');
            $table->string('session_time'); // e.g., "09:00 AM", "11:30 AM", "02:00 PM", "04:30 PM"
            $table->unsignedInteger('num_people')->default(1);
            $table->string('jewelry_choice')->default('Silver Ring'); // Silver Ring, Silver Bracelet, Silver Pendant, Custom / Undecided
            $table->text('special_requests')->nullable();
            $table->unsignedBigInteger('total_price')->default(0);
            $table->string('status')->default('pending'); // pending, confirmed, completed, cancelled
            $table->string('payment_status')->default('unpaid'); // unpaid, deposit_paid, paid
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->string('category')->default('General');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('country_or_city');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->text('review');
            $table->string('item_crafted')->default('Silver Ring');
            $table->string('photo')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->default('workshop'); // ring, bracelet, pendant, workshop, participants
            $table->string('image_path');
            $table->text('caption')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('label');
            $table->text('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('packages');
    }
};
