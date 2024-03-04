<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function suppli()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function categ()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
