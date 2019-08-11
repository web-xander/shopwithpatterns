<?php
namespace App\Http\Models;

abstract class Article 
{
    public $id;
    
    public $name;

    public $price;

    public $category;

    public $image;

    public function __construct($article)
    {
        $this->id = $article->id;
        $this->name = $article->name;
        $this->price = $article->price;
        $this->category = $article->category;
        $this->image = $article->image;
    }

    public function renderItemHome()
    {
        return view('dataItemHome', ["article" => $this]);
    }

    abstract public function render();
}