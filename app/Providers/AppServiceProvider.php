<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Helpers\ExternalApiHelper;
use App\Helpers\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(ExternalApiHelper::class, function(){
        //     return new ExternalApiHelper('Init from AppServiceProvider.php file');
        // });

        $this->app->bind(ExternalApiHelper::class, function(){
            return new ExternalApiHelper('Init from AppServiceProvider.php file');
        });

        $this->app->singleton(Logger::class, function(){
            return new Logger();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
