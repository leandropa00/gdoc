<?php

namespace App\Providers;
use App\Models\Cargo;

use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer(['users.fields'], function ($view) {
            $cargoItems = Cargo::pluck('nombre','id')->toArray();
            $view->with('cargoItems', $cargoItems);
        });
        //
    }
}