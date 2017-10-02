<?php

namespace App\Providers;
use View;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        // view()->share('app_list', $apps);
        view()->share('app_list', ['haha','haha','haha','haha']);
        view()->share('app_name', Auth::id());

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
