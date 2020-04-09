<?php

namespace App\Providers;
use App\Models\Hotel;
use App\Observers\HotelObserver;
use Illuminate\Support\ServiceProvider;

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
        Hotel::observe(HotelObserver::class);
    }
}
