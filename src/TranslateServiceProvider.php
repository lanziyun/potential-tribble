<?php

namespace Lanziyun\PotentialTribble;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class TranslateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/translation.php', 'translation');
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
            __DIR__ . '/../config/translation.php' => config_path('translation.php'),
        ]);
    }
}