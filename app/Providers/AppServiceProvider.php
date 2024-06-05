<?php

namespace App\Providers;

use App\Models\Configuration;
use Illuminate\Support\ServiceProvider;

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
       // Load configurations from the database and share globally
       $configurations = Configuration::get();

       // Share the configurations globally
       view()->share('configurations', $configurations);

       // Optionally, you can share it via the app container
       app()->instance('configurations', $configurations);
    }
}
