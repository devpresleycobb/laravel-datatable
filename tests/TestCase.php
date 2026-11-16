<?php

declare(strict_types=1);

namespace Presleycobb\Datatable\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Presleycobb\Datatable\DatatableServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            DatatableServiceProvider::class,
        ];
    }
}
