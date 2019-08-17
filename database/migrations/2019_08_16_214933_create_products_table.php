<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->string('name');
            $table->bigInteger('category_id');
            $table->double('price');
            $table->string('image');
            $table->json('other_details');
=======
>>>>>>> 947126e1a46a037baba906e55f52d3e35db8d699
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
