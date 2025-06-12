<?php

namespace App\Providers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\ServiceProvider;
use App\interfaces\AuthRepositoryInterface;
use App\interfaces\ReportCategoryRepositoryinterface;
use App\Repositories\AuthRepository;
use App\interfaces\ResidentRepositoryInterface;
use App\Repositories\ReportCategoryRepository;
use App\Repositories\ReportRepository;
use App\Repositories\ResidentRepository;
use App\interfaces\ReportRepositoryinterface;
use App\interfaces\ReportStatusRepositoryinterface;
use App\Repositories\ReportStatusRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );
        $this->app->bind(
            ResidentRepositoryInterface::class,
            ResidentRepository::class
        );
        $this->app->bind(ReportCategoryRepositoryinterface::class, ReportCategoryRepository::class);
        $this->app->bind(
            ReportRepositoryinterface::class,
            ReportRepository::class
        );
        $this->app->bind(
            ReportStatusRepositoryinterface::class,
            ReportStatusRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
