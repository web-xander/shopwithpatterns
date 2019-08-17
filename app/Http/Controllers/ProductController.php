<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ArticleRepository;

class ProductController extends Controller
{
    public $articles;

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function show($id)
    {
        $article = $this->articles->get($id);
        return view('product', compact('article'));
    }
}
