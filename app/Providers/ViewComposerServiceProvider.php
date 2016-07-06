<?php

namespace App\Providers;

use App\Article;
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
//        view()->composer('partials.nav', function($view)
//        {
//            $view->with('latest', Article::latest()->first());
//        });

        $this->composeNavigation();


    }

    /**
     * Compose the navigation bar.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeNavigation()
    {
//        view()->composer('partials.nav', function ($view) {
//            $view->with('latest', Article::latest()->first());
//        });

        view()->composer('partials.nav', 'App\Http\Composers\NavigationComposer');
    }
}
