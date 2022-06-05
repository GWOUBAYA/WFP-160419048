<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    public $timestamp = false;
    public function medicines()
    {
        return $this->hasMany(medicines::class, 'category_id', 'id');
    }
}
