<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMetaInformation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillables = ['name', 'keywords', 'description', 'product_id'];
}
