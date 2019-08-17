<?php 
namespace App\Observers;

use App\Interfaces\Observer;

class EmailedCustomer implements Observer
{
    public function update()
    {
        echo "<p>Estimado cliente: En instantes se le enviara un mail a su casilla  de correo con el contenido de su carrito</p>";
    }
}