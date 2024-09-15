<?php

namespace App\Providers;

use App\Interfaces\FolderInterface;
use App\repositories\FolderRepository;
use Illuminate\Support\ServiceProvider;

class FolderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FolderInterface::class, FolderRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
