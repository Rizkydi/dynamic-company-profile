<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Str;
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
        Str::macro('limitWords', function ($value, $words = 10, $end = '...') {
            $wordsArray = Str::words($value, $words, $end);
            return $wordsArray;
        });
    }
}
