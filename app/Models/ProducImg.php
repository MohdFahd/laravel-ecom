<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducImg extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'pro_color_size_id'];
    protected $table = 'pro_img';

    public function producImg()
    {
        return $this->belongsTo(ProducColorSize::class);
    }
}
