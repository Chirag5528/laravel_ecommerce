<?php


namespace App\Http\View\Composers;

use App\Models\Products\ProductCategory;
use Illuminate\View\View;

class CategoryListComposer
{
    public function compose(View $view){
        $categories = ProductCategory::select('id','name')->where('status','=','1')->orderBy('name')->get();
        $view->with('categories',$categories);
    }
}
