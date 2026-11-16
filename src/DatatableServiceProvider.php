<?php

declare(strict_types=1);

namespace Presleycobb\Datatable;

use Illuminate\Support\ServiceProvider;

class DatatableServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Datatable::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}
