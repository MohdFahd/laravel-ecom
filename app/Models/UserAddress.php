<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'address', 'country', 'city', 'phone', 'email', 'name', 'zip'];
    protected $table = 'users_addresses';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}