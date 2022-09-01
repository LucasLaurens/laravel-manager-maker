<?php

declare(strict_types=1);

namespace LucasLaurens\LaravelManagerMaker\Commands;

use Exception;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Str;

class CreateManagerFileCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:manager-class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Manager';

    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/manager.stub';
    }

    /**
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\{$this->type}s";
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

        return $this
            ->replaceNamespace($stub, ucfirst($name))
            ->replaceClass($stub, $name);
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name): string
    {
        $class = str_replace($this->getNamespace($name).'\\', '', $name);
        $contractName = str_replace($this->getNamespace($name).'\\', '', $name).'Contract';
        $contractNamespace = $this->rootNamespace()."{$this->type}s\\{$contractName}";

        $replace = [
            '{{ class }}' => $class,
            '{{ contract }}' => $contractName,
            '{{ contractNamespace }}' => $contractNamespace,
        ];

        return str_replace(array_keys($replace), array_values($replace), $stub);
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

        /** @var array $app */
        $app = $this->laravel;
        if (! isset($app['path'])) {
            throw new Exception("The path key doesn't exist from the app configuration");
        }

        return $app['path'].'/'.str_replace('\\', '/', $name).'.php';
    }
}
