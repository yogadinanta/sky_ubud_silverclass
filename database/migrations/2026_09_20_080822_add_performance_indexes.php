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
        Schema::table('packages', function (Blueprint $table) {
            $table->index(['is_active', 'sort_order']);
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->index(['is_active', 'sort_order']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->index(['is_featured', 'sort_order']);
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->index(['is_featured', 'sort_order']);
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->index(['status', 'booking_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropIndex(['status', 'booking_date']);
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropIndex(['is_featured', 'sort_order']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropIndex(['is_featured', 'sort_order']);
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropIndex(['is_active', 'sort_order']);
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->dropIndex(['is_active', 'sort_order']);
        });
    }
};
