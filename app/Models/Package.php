<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'price_label',
        'min_persons',
        'silver_grams',
        'duration',
        'tagline',
        'description',
        'inclusions',
        'badge',
        'is_featured',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'inclusions' => 'array',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'price' => 'integer',
            'min_persons' => 'integer',
            'sort_order' => 'integer',
        ];
    }

    public function getImageAttribute(): string
    {
        return match($this->slug) {
            'single' => 'images/happy_participants.jpg',
            'couple' => 'images/happy_creators_rings.jpg',
            'family' => 'images/silver_creations_trio.jpg',
            'group' => 'images/hero_silver_craft.jpg',
            default => 'images/happy_participants.jpg',
        };
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
