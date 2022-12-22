<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'employee_id',
        'user_id',
        'total_sale',
        'discount',
        'sale_date',
    ];

    public function store(){
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function employee(){
        return $this->belongsTo(StoreEmployee::class, 'employee_id', 'id');
    }
}
