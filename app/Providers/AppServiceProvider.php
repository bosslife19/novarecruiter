<?php

namespace App\Providers;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
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
        //
        FilamentAsset::register([
           
            Js::make('pusherSetup', __DIR__ . '/../../resources/js/filament.js')->module(true),
            // Js::make('pusher', __DIR__ . '/../../resources/js/pusher.js'),
            // Js::make('filamentEcho', __DIR__ . '/../../resources/js/filamentEcho.js'),
            // Js::make('globalListenter', __DIR__ . '/../../resources/js/global-listener.js'),
            
        ]);
    }
}
