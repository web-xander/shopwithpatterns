<?php 
namespace App\Http\Repositories;

use App\Subscription;

class CustomerRepository
{
    public $customersSubscribes;

    public function __construct()
    {
        $this->customersSubscribes = Subscription::all();
    }

    public function createSubscriberFromRequest($request)
    {
        Subscription::create($request->all());
    }

}