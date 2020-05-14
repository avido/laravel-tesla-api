<?php
namespace Avido\LaravelTeslaApi;

use Avido\TeslaApiClient\TeslaApiClient;
use Illuminate\Support\ServiceProvider;

class TeslaApiServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([$this->getConfigPath() => config_path('tesla-api-client.php'),], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            $this->getConfigPath(), 'tesla-api-client'
        );
        $this->app->bind('tesla-api', function($app) {
            return new TeslaApiClient(
                config('tesla-api-client.email'),
                config('tesla-api-client.password')
            );
        });
    }
    private function getConfigPath(): string
    {
        return __DIR__.'/../config/config.php';
    }
}
