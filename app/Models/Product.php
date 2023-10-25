<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desecration', 'img', 'price', 'discount', 'cat_id'];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Product::class,'cat_id');
    }

    public function ProducColorSize()
    {
        return $this->belongsTo(ProducColorSize::class);
    }
    public function productsize()
    {
        return $this->belongsTo(ProducSize::class);
    }
    public function ProducColor()
    {
        return $this->belongsTo(ProducColor::class);
    }
}