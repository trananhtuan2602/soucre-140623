<?php

namespace App\Providers;

use App\Models\modelPublic\Singleton;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('*', function ($view) {
        //     $view->with('channels', AppChannel::all());
        // });
        View::composer('*', function($view) {
            $html = '<select class="custom-select">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>';
            $view
            ->with('index', $html);
        });
    }
}
