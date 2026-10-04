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
        'image',
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

    public function getImageUrlAttribute(): string
    {
        if (!empty($this->image)) {
            if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
                return $this->image;
            }

            if (str_starts_with($this->image, 'images/')) {
                return asset($this->image);
            }

            try {
                if (\Illuminate\Support\Facades\Storage::disk('public')->exists($this->image) || file_exists(public_path('storage/' . $this->image)) || file_exists(storage_path('app/public/' . $this->image))) {
                    return asset('storage/' . $this->image);
                }
            } catch (\Throwable $e) {
                // Ignore
            }
        }

        return match($this->slug) {
            'single' => asset('images/happy_participants.jpg'),
            'couple' => asset('images/happy_creators_rings.jpg'),
            'family' => asset('images/silver_creations_trio.jpg'),
            'group' => asset('images/hero_silver_craft.jpg'),
            'custom' => asset('images/happy_participants.jpg'),
            default => asset('images/happy_participants.jpg'),
        };
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
