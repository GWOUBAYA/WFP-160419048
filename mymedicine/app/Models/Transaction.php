<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function buyer(){
        return $this->belongsTo(Buyer::class,'buyer_id');

    }
public function medicines(){
    return $this->belongsToMany(medicines::class,'medicine_transaction','transaction_id','medicine_id')->withPivot('quantity','price');
}

}
