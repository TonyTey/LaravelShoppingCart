<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    use HasFactory;
    protected $fillable=['paymentStatus', 'userID', 'amount'];

    public function user() {
        return $this->belongsto('App\Models\User');
    }
}
