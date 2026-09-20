<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\SiteSetting;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $testimonials = Testimonial::where('is_featured', true)->orderBy('sort_order', 'asc')->get();
        $galleries = Gallery::where('is_featured', true)->orderBy('sort_order', 'asc')->get();
        $settings = SiteSetting::all()->pluck('value', 'key');

        return response()
            ->view('frontend.index', compact('packages', 'faqs', 'testimonials', 'galleries', 'settings'))
            ->header('Cache-Control', 'public, max-age=600, stale-while-revalidate=3600');
    }
}
