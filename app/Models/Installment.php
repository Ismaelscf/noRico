<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
}
