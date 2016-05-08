<?php

/**
 * An example Service Provider for the package.
 * Feel free to add more service providers as per your requirement.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider {

    
    public function register() {
        $this->app->bind('', function($app) {
            //define your package dependencies here.
        });

        $this->app->bind(
                'Package\Application\Interfaces\PackageInterface', 'Package\Application\Repositories\PackageRepository'
        );
    }

    public function boot() {

        //Publishes the configuration file to the application's config directory
        $this->publishes([
            __DIR__ . '/../config/packagename_config.php' => config_path('packagename_config.php'),
        ]);

        //Load the routes.php file of the package present inside the src/Http Folder
        require __DIR__ . '/../Http/routes.php';

        //Loading views"
        $this->loadViewsFrom(__DIR__ . '/../resources/views/packagename', 'packagename');

        //Publish views and assets
        $this->publishes([
            __DIR__ . '/../resources/views/packagename' => base_path('resources/views/vendor/packagename'),
            __DIR__ . '/../resources/assets' => base_path('public/vendor/packagename'),
        ]);

        //Adding the custom middleware to the application's IoC container
        $this->app['router'];
        $this->app['router']->middleware('packagename_auth', 'Package\Application\Http\Middlewares\PackageAuthMiddleware');
    }

}
