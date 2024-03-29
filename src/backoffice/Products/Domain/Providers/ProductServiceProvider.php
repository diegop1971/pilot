<?php
namespace src\backoffice\Products\Domain\Providers;

use src\Shared\Domain\SlugGenerator;
use Illuminate\Support\ServiceProvider;
use src\Shared\Domain\Bus\Command\Container;
use src\Shared\Domain\Bus\Command\CommandBus;
use src\Shared\Infrastructure\LaravelContainer;
use src\backoffice\Products\Domain\ProductRepository;
use src\Shared\Infrastructure\CviebrockEloquentSluggable;
use src\Shared\Infrastructure\Bus\Command\SimpleCommandBus;
use src\backoffice\Products\Infrastructure\Persistence\Eloquent\EloquentProductRepository;
use src\backoffice\Products\Infrastructure\Persistence\RawSql\RawSqlProductRepository;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(
        CommandBus::class,
        SimpleCommandBus::class
      );

      $this->app->bind(
        Container::class,
        LaravelContainer::class
      );

      $this->app->bind(
        UuidGenerator::class,
        RamseyUuidGenerator::class
      );

      $this->app->bind(
        SlugGenerator::class,
        CviebrockEloquentSluggable::class
      );

      $this->app->bind(
        ProductRepository::class, 
        EloquentProductRepository::class
      );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
