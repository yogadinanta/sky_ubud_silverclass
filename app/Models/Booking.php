<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_code',
        'package_id',
        'package_name',
        'customer_name',
        'customer_email',
        'customer_phone',
        'booking_date',
        'session_time',
        'num_people',
        'jewelry_choice',
        'special_requests',
        'total_price',
        'status',
        'payment_status',
        'admin_notes',
    ];

    protected function casts(): array
    {
        return [
            'booking_date' => 'date',
            'num_people' => 'integer',
            'total_price' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function ($booking) {
            if (empty($booking->booking_code)) {
                $booking->booking_code = 'SKY-' . strtoupper(Str::random(6));
            }
        });
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
