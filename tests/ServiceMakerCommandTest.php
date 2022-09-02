<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker\Tests;

use RuntimeException;

use function Pest\Laravel\artisan;

it('returns a successful response when make:manager command is executed', function () {
    artisan('make:manager TestManager')
    ->expectsOutput('Manager files created with success!')
    ->assertExitCode(0);
});
