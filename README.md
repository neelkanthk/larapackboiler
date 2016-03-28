# laraPackBoiler
#####Version 1.0.0
##A package development boilerplate for Laravel 5.1+

#####Provides a Jump Start to your Laravel package development.

###Salient Features

  - Follows Laravel 5.1 directory structure.
  - Well documented with example code.
  - Encourages use of Interfaces and Database Repositories.
  - Saves a lot of time while developing a new package from scratch.
  - Make your package views customizable in the application.
  - Provides example code for controller, model, view, interfaces, events, repositories.

### Installation

Note: You need to have composer installed on your system.

1. Download this package to your vendor folder.

2. Copy the following to your config/app.php's providers array

   - Package\Application\Providers\PackageServiceProvider::class
   - Package\Application\Providers\PackageEventServiceProvider::class

3. Change the larapackboiler composer.json file to define dependencies and other package related information.

4. Add the following line to the project's composer.json psr-4 array:

  ```
  "psr-4": {
              "App\\": "app/",
              "Package\\Application\\" : "vendor/larapackboiler/application/src/"
          }
  ```

5. Run ``` composer dumpautoload ``` from your project root.

6. Run following command to move the package assets, views, migrations, seeds and config files to your application. (Optional)

    ```
    php artisan vendor:publish
    ```

7. Test your installation by visiting the following URL in your browser.

   packagename/test
   
8. If you see 'Hi I am PackageController@exampleAction', then you have successfully configured the laraPackBoiler.

7. That's it. Now, You are ready to develop your package.

#####The boilerplate code is well documented to help you in your development.

##Quick Start for developing your first package using boilerplate

1. Rename the package folder to your package name.
2. Change the package name in project's composer.json psr-4 array. 
  
   Example:

   ```
  "psr-4": {
              "App\\": "app/",
              "TodoPackage\\Application\\" : "vendor/todopackage/application/src/"
          }
  ```
3. Similarly, Change the package name in your config/app.php's providers array.

   - TodoPackage\Application\Providers\TodoPackageServiceProvider::class
   - TodoPackage\Application\Providers\TodoPackageEventServiceProvider::class

4. Change the package's composer.json psr-4 array:

   ```
   "psr~4": {
            "todopackage\\application\\": "src/"
        }
    ```    
5. Run ``` composer dumpautoload ``` from your project root.
6. Done. Start adding new controllers, models, routes, views to your new package.
