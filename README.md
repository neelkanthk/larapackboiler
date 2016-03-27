# laraPackBoiler
##A package development boilerplate for Laravel 5.1+

Provides a Jump Start to your Laravel package development.

Salient Features

  - Follows Laravel 5.1 directory structure.
  - Encourages use of Interfaces and Database Repositories.
  - Saves a lot of time while developing a new package from scratch.
  - Make your views customizable.

### Installation

You need to have composer installed.

1. Download this package to your vendor folder.

2. Copy the following to your config/app.php's providers array

   - Package\Application\Providers\PackageServiceProvider::class
   - Package\Application\Providers\PackageEventServiceProvider::class

3. Run composer dumpautoload from your project root.