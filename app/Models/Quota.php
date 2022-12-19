<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    use HasFactory;

    public function installments(){
        return $this->hasMany(Installment::class, 'quota_id', 'id');
    }
}
