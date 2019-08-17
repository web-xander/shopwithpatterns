<?php
namespace App\Http\Repositories;

use App\Subjects\Subject;
use App\Interfaces\Observer;
use App\Observers\DecreaseStock;
use App\Observers\EmailedCustomer;
use App\Observers\EmailedAdministrator;
use Ramsey\Uuid\Exception\UnsupportedOperationException;

class ShoppingCart implements Subject
{
    public $cart = array();

    public $observers = array();

    public function add($id, $quantity)
    {
        $this->cart[] = [ 'id' => $id, 'quantity' => $quantity];
    }

    public function checkout()
    {
        $this->registerObserver(new EmailedCustomer($this->cart));
        $this->registerObserver(new EmailedAdministrator($this->cart));
        $this->registerObserver(new DecreaseStock($this->cart));

        $this->notifyObserver();
    }

    public function registerObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function unregisterObserver(Observer $o)
    {
        throw new UnsupportedOperationException("Operation not implemented");
    }

    public function notifyObserver()
    {
        foreach ($this->observers as $o) {
            $o->update();
        }
    }
}