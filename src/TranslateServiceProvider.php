<?php

namespace Lanziyun\PotentialTribble;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class TranslateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TranslateService::class, function ($app) {
            return new TranslateService(
                new Client(),
                config('translate.base_url')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/translate.php' => config_path('translate.php'),
        ]);
    }
}
