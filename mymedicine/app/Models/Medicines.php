<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function transactions()
    {
        return $this->belongsToMany(Transactions::class, 'medicine_transaction', 'medicine_id', 'transaction_id')->withPivot('quantity', 'price');
    }
}
