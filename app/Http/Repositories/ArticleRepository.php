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
        $json = file_get_contents('articles.json');
        $articles = json_decode($json);
        
        foreach($articles as $item){
            if($item->category == "electronica")
                $this->articles[$item->id] = new ElectronicArticle($item);
            elseif($item->category == "indumentaria")
                $this->articles[$item->id] = new IndumentaryArticle($item);
            elseif($item->category == "alimentos")
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