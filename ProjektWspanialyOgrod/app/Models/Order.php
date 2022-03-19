<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //relacja 1:1 dla Commenst i User:
    public function user() {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
