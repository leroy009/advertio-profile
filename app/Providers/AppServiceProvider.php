<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
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
        //If you would like to disable the wrapping of the outermost resource, 
        //you should invoke the withoutWrapping method on the base Illuminate\Http\Resources\Json\JsonResource class.
        JsonResource::withoutWrapping();
    }
}
