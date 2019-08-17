<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ShoppingCart;
use App\Http\Repositories\ArticleRepository;

class CartController extends Controller
{
    public function checkout(ArticleRepository $articles)
    {
        $mycart = new ShoppingCart();
        
        $prod1 = $articles->get(1);
        $mycart->add($prod1->id, 5);

        $prod2 = $articles->get(2);
        $mycart->add($prod2->id, 3);

        $mycart->checkout();
    }
}
