<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Package;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of articles.
     */
    public function index()
    {
        $articles = Article::where('is_published', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        $packages = Package::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $settings = SiteSetting::all()->pluck('value', 'key');

        return response()
            ->view('frontend.articles_index', compact('articles', 'packages', 'settings'))
            ->header('Cache-Control', 'public, max-age=600, stale-while-revalidate=3600');
    }

    /**
     * Display the specified article.
     */
    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $moreArticles = Article::where('is_published', true)
            ->where('id', '!=', $article->id)
            ->orderBy('sort_order', 'asc')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $packages = Package::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $settings = SiteSetting::all()->pluck('value', 'key');

        return response()
            ->view('frontend.article_show', compact('article', 'moreArticles', 'packages', 'settings'))
            ->header('Cache-Control', 'public, max-age=600, stale-while-revalidate=3600');
    }
}
