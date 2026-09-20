<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_id' => 'required|exists:packages,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:50',
            'booking_date' => 'required|date|after_or_equal:today',
            'session_time' => 'required|string',
            'num_people' => 'required|integer|min:1',
            'jewelry_choice' => 'required|string',
            'special_requests' => 'nullable|string|max:1000',
        ]);

        $package = Package::findOrFail($validated['package_id']);
        
        // Calculate price based on package
        $totalPrice = $package->price;
        if ($package->slug === 'single') {
            $totalPrice = $package->price * max(1, $validated['num_people']);
        } elseif ($package->slug === 'group') {
            $totalPrice = $package->price * max($package->min_persons, $validated['num_people']);
        }

        $bookingCode = 'SKY-' . strtoupper(Str::random(6));

        $booking = Booking::create([
            'booking_code' => $bookingCode,
            'package_id' => $package->id,
            'package_name' => $package->name,
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'customer_phone' => $validated['customer_phone'],
            'booking_date' => $validated['booking_date'],
            'session_time' => $validated['session_time'],
            'num_people' => $validated['num_people'],
            'jewelry_choice' => $validated['jewelry_choice'],
            'special_requests' => $validated['special_requests'] ?? null,
            'total_price' => $totalPrice,
            'status' => 'pending',
            'payment_status' => 'unpaid',
        ]);

        $whatsappNumber = SiteSetting::get('whatsapp_number', '6281234567890');
        $formattedDate = date('d M Y', strtotime($booking->booking_date));
        $formattedPrice = 'IDR ' . number_format($booking->total_price, 0, ',', '.');

        $waMessage = "🌟 *BOOKING RESERVATION - SKY UBUD SILVER CLASS* 🌟\n\n" .
            "• *Booking Code:* `{$booking->booking_code}`\n" .
            "• *Name:* {$booking->customer_name}\n" .
            "• *Package:* {$booking->package_name}\n" .
            "• *Jewelry:* {$booking->jewelry_choice}\n" .
            "• *Date:* {$formattedDate}\n" .
            "• *Session:* {$booking->session_time}\n" .
            "• *Participants:* {$booking->num_people} person(s)\n" .
            "• *Est. Total:* {$formattedPrice}\n" .
            ($booking->special_requests ? "• *Special Request:* {$booking->special_requests}\n" : "") .
            "\nHello SKY Ubud team, I would like to confirm my silver class reservation!";

        $waUrl = "https://wa.me/{$whatsappNumber}?text=" . rawurlencode($waMessage);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Your silver class reservation has been recorded successfully!',
                'booking_code' => $booking->booking_code,
                'whatsapp_url' => $waUrl,
                'booking' => $booking,
            ]);
        }

        return redirect($waUrl);
    }
}
