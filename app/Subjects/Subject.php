<?php
namespace App\Subjects;

use App\Interfaces\Observer;

interface Subject
{
    public function registerObserver(Observer $o);
    public function unregisterObserver(Observer $o);
    public function notifyObserver();
}