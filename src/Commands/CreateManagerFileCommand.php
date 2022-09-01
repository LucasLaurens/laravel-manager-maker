<?php

namespace LucasLaurens\LaravelManagerMaker\Commands;

use Illuminate\Console\Command;

class CreateManagerFileCommand extends Command
{
    public $signature = 'laravel-manager-maker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
