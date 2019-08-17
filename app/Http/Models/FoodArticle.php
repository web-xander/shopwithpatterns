<?php
namespace App\Http\Models;

class FoodArticle extends Article
{
    public $details;

    public function __construct($article)
    {
        parent::__construct($article);

        $this->details = $article->other_details;
    }

    public function render()
    {
        return view('product.food', ['article' => $this]);
    }
}