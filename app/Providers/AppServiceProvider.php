<?php

namespace App\Providers;

use App\Models\Simulator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Status;
use App\Models\Type;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            $statuses = Status::all();

            $view->with('statuses', $statuses);
        });

        View::composer('*', function ($view) {
            $simulators = Simulator::all();

            $view->with('simulators', $simulators);
        });

        View::composer('*', function ($view) {
            $types = Type::all();

            $view->with('types', $types);
        });
    }
}
