<?php

namespace Pranav\SeoOptimizer;

use Illuminate\Support\ServiceProvider;

class SEOOptimizerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge the config file with the Laravel app config
        $this->mergeConfigFrom(__DIR__.'/../config/seo-optimizer.php', 'seo-optimizer');
    }

    public function boot()
    {
        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../config/seo-optimizer.php' => config_path('seo-optimizer.php'),
        ], 'config');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
