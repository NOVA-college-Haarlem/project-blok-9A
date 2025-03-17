<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'slug', 'description', 'image', 'category_id'];

    protected $table = 'products';


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
