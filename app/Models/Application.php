<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_name',
        'product_address',
        'client_name',
        'client_phone_number',
        'price_org',
        'price_selled',
        'file_f',
        'file_s',

    ];

    public function user(){ return $this->belongsTo(User::class); }
}
