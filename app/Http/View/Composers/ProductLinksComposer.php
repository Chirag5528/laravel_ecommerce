<?php


namespace App\Http\View\Composers;


use Illuminate\View\View;

class ProductLinksComposer
{
    public function compose(View $view){
        $links = [
            [
                'name' => 'Products',
                'uri' => 'products',
                'route' => route('products.index')
            ],
            [
                'name' => 'Categories',
                'uri' => 'categories',
                'route' => route('products.index')
            ],
            [
                'name' => 'Sub Categories',
                'uri' => 'sub_categories',
                'route' => route('products.index')
            ],
        ];
        $view->with('links',$links);
    }

}
