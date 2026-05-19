<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Icon as IconFacade;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        IconFacade::register('heroicons', base_path('vendor/blade-ui-kit/blade-heroicons/resources/svg'));
        IconFacade::register('rapidez', base_path('resources/svg'));
    }
}
