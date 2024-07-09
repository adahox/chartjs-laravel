<?php

namespace Olharacessivel\ChartjsLaravel;

use Illuminate\Support\ServiceProvider;

class ChartjsLaravelServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/view', 'chartjslaravel');

    }


    public function register()
    {
        $this->app->bind(ChartJS::class, function () {
            return new ChartJS();
        });

    }


}
