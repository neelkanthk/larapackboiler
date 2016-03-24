<?php

/**
 * A basic package controller.
 * Feel free to add more controllers to your package
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Http\Controllers;

use App\Http\Controllers\Controller;

class PackageController extends Controller {

    /**
     * Standard index action
     * 
     * @author Neelkanth Kaushik
     * @since 1.0.0
     * 
     */
    public function index() {
        //packagename_namespace should be same as the 
        //one defined in the PackageServiceProvider's $this->loadViewsFrom()
        return view('package_namespace::pages.dashboard');
    }

    public function exampleAction() {
        return "Hi I am PackageController@exampleAction";
    }

    /**
     * A basic installation action defined for setting up database tables
     * for your package
     * 
     * @author Neelkanth Kaushik
     * @version 1.0.0
     */
    public function install() {
        \Illuminate\Support\Facades\Artisan::call('migrate', array('--path' => '/vendor/laravel_packageboilerplate/application/src/database/migrations/'));

        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'Package\Application\database\seeds\PackageTodoTableSeeder'
        ]);
    }

}
