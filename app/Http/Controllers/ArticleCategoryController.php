<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $article_categories = ArticleCategory::paginate(10);
        return view('article_category.index', compact('article_categories'));
    }
}
