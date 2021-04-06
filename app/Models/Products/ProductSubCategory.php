<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSubCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'status',
        'category_id'
    ];
}
