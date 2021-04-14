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

    public function image(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function shipping(){
        return $this->hasOne(ProductInformation::class,'product_id','id');
    }

    public function meta_information(){
        return $this->hasOne(ProductMetaInformation::class,'product_id','id');
    }
    public function description(){
        return $this->hasOne(ProductDescription::class,'product_id','id');
    }

    public function video(){}


}
