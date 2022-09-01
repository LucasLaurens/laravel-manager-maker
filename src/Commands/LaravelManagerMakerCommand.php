<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker\Commands;

use Illuminate\Console\Command;

final class LaravelManagerMakerCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'make:manager {name : The name of the manager you want to create}';

    /**
     * @var string
     */
    protected $description = 'Create a manager implementing its own interface';

    /**
     * @var string
     */
    protected $type = 'manager';

    public function handle(): int
    {
        $this->call('make:manager-class', [
            'name' => $this->argument('name'),
        ]);

        $this->call('make:manager-contract', [
            'name' => $this->argument('name'),
        ]);

        $this->comment('Manager files created with success!');

        return self::SUCCESS;
    }
}
