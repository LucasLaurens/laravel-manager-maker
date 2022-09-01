<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

final class CreateManagerFileContractCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:manager-contract';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Contract';

    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/managerContract.stub';
    }

    /**
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Managers";
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     *
     * @throws FileNotFoundException
     */
    protected function buildClass($name): string
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)
                    ->replaceClass($stub, $name.$this->type);
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name): string
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel['path'].'/'.str_replace('\\', '/', $name.$this->type).'.php';
    }
}
