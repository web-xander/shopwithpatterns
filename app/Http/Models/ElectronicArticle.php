<?php
namespace App\Http\Models;

class ElectronicArticle extends Article
{
    public $specifications;

    public function __construct($article)
    {
        parent::__construct($article);

        $this->specifications = $article->specifications;
    }

    public function render()
    {
        return view('product.electronic', ['article' => $this]);
    }
}