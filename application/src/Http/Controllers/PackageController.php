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
use Package\Application\Interfaces\PackageInterface;

class PackageController extends Controller {

    protected $data;

    //Get the repository using Dependency Injection
    public function __construct(PackageInterface $object) {
        $this->data = $object;
    }

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

    /**
     * A simple action to return string
     * @author Neelkanth Kaushik
     * @since 1.0.0
     * @return string
     */
    public function exampleAction() {
        return "Hi I am PackageController@exampleAction";
    }

    /**
     * A simple action to get the data from database
     * 
     * @author Neelkanth Kaushik
     * @since 1.0.0 
     */
    public function databaseAccess() {
        //Fetch the data using the repository function
        $data = $this->data->fetchFromDb();
        return $data;
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
        echo "<h2>Package Tables Created Succesfully.</h2>";
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'Package\Application\database\seeds\PackageTableSeeder'
        ]);
        echo "<br/>";
        echo "<h2>Package Tables Seeded Successfully.</h2>";
    }

}
