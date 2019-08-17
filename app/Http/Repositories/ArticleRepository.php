<?php 
namespace App\Http\Repositories;

use App\Http\Models\ElectronicArticle;
use App\Http\Models\IndumentaryArticle;
use App\Http\Models\FoodArticle;

class ArticleRepository 
{
    public $articles;

    public function __construct()
    {
        $articles = \App\Product::all();

        
        
        foreach($articles as $item){
            
            if($item->category->name == "electronica")
                $this->articles[$item->id] = new ElectronicArticle($item);
            elseif($item->category->name == "indumentaria")
                $this->articles[$item->id] = new IndumentaryArticle($item);
            elseif($item->category->name == "alimentos")
                $this->articles[$item->id] = new FoodArticle($item);
        }

    }

    public function all()
    {
        return $this->articles;
    }

    public function get($id)
    {
        return $this->articles[$id];
    }
}