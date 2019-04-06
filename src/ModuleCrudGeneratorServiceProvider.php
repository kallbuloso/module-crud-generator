<?php

namespace kallbuloso\ModuleCrudGenerator;

use Illuminate\Support\ServiceProvider;

class ModuleCrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'kallbuloso');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'kallbuloso');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/modulecrudgenerator.php', 'modulecrudgenerator');

        // Register the service the package provides.
        $this->app->singleton('modulecrudgenerator', function ($app) {
            return new ModuleCrudGenerator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['modulecrudgenerator'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/modulecrudgenerator.php' => config_path('modulecrudgenerator.php'),
        ], 'modulecrudgenerator.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/kallbuloso'),
        ], 'modulecrudgenerator.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/kallbuloso'),
        ], 'modulecrudgenerator.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/kallbuloso'),
        ], 'modulecrudgenerator.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
