<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeNavigation()
    {
        view()->composer('partials.nav', 'App\Http\Composer\NavigationComposer');

        // view()->composer('partitials.nav', function($view)
        // {
        //     $view->with('latest', \App\Course::latest()->first());
        // });
    }

}
