<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'img', 'parant_id'];
    protected $table = 'categories';

    public function child()
    {
        return $this->hasMany(Category::class,'parant_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'cat_id');
    }
}
