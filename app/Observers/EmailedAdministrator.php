<?php 
namespace App\Observers;

use App\Interfaces\Observer;

class EmailedAdministrator implements Observer
{
    public function update()
    {
        echo "<p>Se le ha enviado un mail al administrador de la tienda.</p>";
    }
}