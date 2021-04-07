<?php
namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name','slug','product_category_id','product_sub_category_id','quantity'
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class,'product_category_id', 'id');
    }

    public function sub_category(){
        return $this->belongsTo(ProductSubCategory::class,'product_sub_category_id', 'id');
    }

    public function price(){
        return $this->hasOne(ProductPrice::class, 'product_id');
    }
}
