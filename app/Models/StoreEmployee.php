<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'user_id',
        'function',
        'active',
    ];

    public function store(){
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}
