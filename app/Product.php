<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $casts = [
        'other_details' => 'json'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
