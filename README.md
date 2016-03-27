# laraPackBoiler
##A package development boilerplate for Laravel 5.1+

Provides a Jump Start to your Laravel package development.

Salient Features

  - Follows Laravel 5.1 directory structure.
  - Well documented with example code.
  - Encourages use of Interfaces and Database Repositories.
  - Saves a lot of time while developing a new package from scratch.
  - Make your views customizable.
  - Provides example code for controller, model, view, interfaces, events, repositories.

### Installation

Note: You need to have composer installed on your system.

1. Download this package to your vendor folder.

2. Copy the following to your config/app.php's providers array

   - Package\Application\Providers\PackageServiceProvider::class
   - Package\Application\Providers\PackageEventServiceProvider::class

3. Change the composer.json file to define dependencies and other package related information.

4. Run ```sh $ composer dumpautoload ``` from your project root.

5. Run 

    ```sh
    $ php artisan vendor:publish to move the package assets, views, migrations, seeds and config files to your application.
    ```

6. That's it. You are ready to develop your package.

#####The boilerplate code is well documented to help you in your development.
