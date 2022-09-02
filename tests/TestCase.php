<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use LucasLaurens\LaravelManagerMaker\LaravelManagerMakerServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelManagerMakerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
