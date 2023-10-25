<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducSize extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'pro_id'] ;

    protected $table = 'product_sizes';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function ProducColorSize()
    {
        return $this->hasMany(ProducColorSize::class);
    }
}
