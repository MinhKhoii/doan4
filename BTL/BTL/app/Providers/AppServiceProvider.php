<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\loaisp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer('shop-grid',function($view){
            $loaisp = loaisp::all();
            $view->with('loaisp',$loaisp);
        });
        view()->composer('slide',function($view){
            $loaisp = loaisp::all();
            $view->with('loaisp',$loaisp);
        });

        view()->composer('hero',function($view){
            $loaisp = loaisp::all();
            $view->with('loaisp',$loaisp);
        });

        view()->composer('header',function($view){
            $loaisp = loaisp::all();
            $view->with('loaisp',$loaisp);
        });
    }
}
