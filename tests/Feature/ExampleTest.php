<?php

declare(strict_types=1);

use Presleycobb\Datatable\Datatable;

it('resolves the singleton', function () {
    expect(app(Datatable::class))->toBeInstanceOf(Datatable::class);
});

it('returns the same instance from the container', function () {
    expect(app(Datatable::class))->toBe(app(Datatable::class));
});
