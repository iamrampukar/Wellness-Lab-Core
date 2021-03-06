<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PatientInterface;
use App\Repositories\PatientRepository;

class PatientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PatientInterface::class, PatientRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
