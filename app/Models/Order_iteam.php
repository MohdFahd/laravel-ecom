<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_iteam extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'pro_color_size_id', 'price', 'discount'];
    protected $table = 'order_iteams';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function ProducColorSize()
    {
        return $this->belongsTo(ProducColorSize::class);
    }
}
