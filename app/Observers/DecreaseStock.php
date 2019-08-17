<?php 
namespace App\Observers;

use App\Interfaces\Observer;
use App\Product;

class DecreaseStock implements Observer
{
    public $cart;

    public function __construct($cart)
    {
        $this->cart = $cart;
    }
    
    public function update()
    {
        echo "<p>A continuacion, se producira la disminucion de su stock</p>";

        $this->decrease();
    }

    public function decrease()
    {
        foreach ($this->cart as $item) {
            $product = Product::find($item['id']);
            $product->stock = $product->stock - $item['quantity'];
            $product->save();
        }
    }
}