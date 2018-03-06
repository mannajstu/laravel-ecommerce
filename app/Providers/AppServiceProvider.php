<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\User;

class AppServiceProvider extends ServiceProvider

{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('name', 'bitm');
        
        View::composer('frontEnd.*', function ($view) {
            $publishedCategories = Category::where('publicationStatus', 1)->get();
            $view->with('publishedCategories', $publishedCategories);
        });
        View::composer('admin.*', function ($view) {
            $user = User::all();
            $view->with('users', $user);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
