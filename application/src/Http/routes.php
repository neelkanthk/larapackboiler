<?php

/**
 * Define your package specific routes here.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */
// Example routes
Route::get('packagename/test', 'Package\Application\Http\Controllers\PackageController@exampleAction');
Route::get('packagename/dbtest', 'Package\Application\Http\Controllers\PackageController@databaseAccess');

/*
  First run and installations route
  This route is optional and completely customizable.

  If you want to create some tables for your package this route may come handy.
  This will check for the "packagename_tablename" in the database and run the migration if it is not present.

 */
Route::get('packagename/install', ['as' => 'packagename_installation', 'uses' => 'Package\Application\Http\Controllers\PackageController@install']);

Route::get('packagename', ['as' => 'packagename_root', function() {
        if (!Schema::hasTable('packageboilerplate_table')) {
            return redirect()->route('packagename_installation');
        } else {
            return redirect()->route('packagename_index');
        }
    }]);

/* First run and installations */