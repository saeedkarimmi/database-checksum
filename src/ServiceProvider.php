<?php

namespace saeedkarimmi\DatabaseChecksum;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/database-checksum.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('database-checksum.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'database-checksum'
        );

        $this->app->bind('database-checksum', function () {
            return new DatabaseChecksum();
        });
    }
}
