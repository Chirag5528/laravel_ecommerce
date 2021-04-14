<?php


namespace App\Providers;

use App\Http\View\Composers\CategoryListComposer;
use App\Http\View\Composers\ProductLinksComposer;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['products.*'], ProductLinksComposer::class);
    }
}
