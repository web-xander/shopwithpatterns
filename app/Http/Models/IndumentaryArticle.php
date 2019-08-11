<?php
namespace App\Http\Models;

class IndumentaryArticle extends Article
{
    public $details;

    public function __construct($article)
    {
        parent::__construct($article);

        $this->details = $article->details;
    }

    public function render()
    {
        return view('product.indumentary', ['article' => $this]);
    }
}