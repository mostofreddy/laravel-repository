<?php

declare(strict_types=1);

namespace Resty\Lrepo\Test;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

class TestCase extends LaravelTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('cache:clear');
        $this->migrateDatabase();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Run Migrations.
     *
     * @return void
     */
    protected function migrateDatabase()
    {
        $path = __DIR__ . '/Database/migrations';

        $fileSystem = new Filesystem();

        foreach ($fileSystem->files($path) as $file) {
            $migrationClass = $fileSystem->getRequire($file);
            $migrationClass->up();
        }
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../vendor/laravel/laravel/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
