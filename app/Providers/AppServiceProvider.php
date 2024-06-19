<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
=======
use Illuminate\Support\ServiceProvider;
>>>>>>> 5a456c77dafe5cac806dbd5907b68b5524d35ed4

class AppServiceProvider extends ServiceProvider
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
<<<<<<< HEAD
        View::share('loai', Category::all());
        View::share('nxb', Publisher::all());
=======
        //
>>>>>>> 5a456c77dafe5cac806dbd5907b68b5524d35ed4
    }
}
