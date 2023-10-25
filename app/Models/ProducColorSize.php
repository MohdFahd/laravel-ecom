<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['pro_color_id', 'pro_size_id', 'qty', 'price', 'discount', 'status'];
    protected $table = 'product_color_size';

    public function ProducColor()
    {
        return $this->belongsTo(ProducColor::class);
    }
    public function product_size()
    {
        return $this->belongsTo(ProducSize::class);
    }
}