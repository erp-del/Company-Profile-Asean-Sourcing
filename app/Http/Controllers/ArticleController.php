<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * @return Collection<int, array<string, mixed>>
     */
    protected function articles(): Collection
    {
        return collect(config('articles', []));
    }

    public function index(): View
    {
        $articles = $this->articles()->sortByDesc('published_at')->values();

        return view('articles.index', compact('articles'));
    }

    public function show(string $slug): View
    {
        $article = $this->articles()->firstWhere('slug', $slug);
        abort_if($article === null, 404);

        return view('articles.show', compact('article'));
    }

    /**
     * @return Collection<int, array<string, mixed>>
     */
    protected function aseanArticles(): Collection
    {
        return collect(config('asean_articles', []));
    }

    public function aseanIndex(): View
    {
        $articles = $this->aseanArticles()->sortByDesc('published_at')->values();

        return view('asean.assist.articles', compact('articles'));
    }
}
