<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'admin.dashboard',
            'admin.profile',
            'admin.posts.create',
            'admin.posts.edit',
            'admin.posts.index',
            'admin.posts.show',
        ], 'App\Http\ViewComposers\AdminComposer'
        );

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
}
