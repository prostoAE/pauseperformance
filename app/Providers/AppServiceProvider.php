<?php

namespace App\Providers;

use App\Models\Organisation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        View::composer('app.parts.header', function ($view) {
            $view->with('organisations', Organisation::getOrganisationsWithGroup());
        });
    }
}
