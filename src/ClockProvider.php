<?php
namespace Clock\ClockProv;


use Illuminate\Support\ServiceProvider;
use Clock\ClockProv\Clock;

class ClockProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('config').'/set_clock.php'))
        {
          $this->publishes([__DIR__.'/tools'=>base_path('config')]);   
        }

        if(!file_exists(base_path('resources/views').'/map.blade.php'))
        {
          $this->publishes([__DIR__.'/blades'=>base_path('resources/views')]);   
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['clock'] = $this->app->share(function($app){
            return new Clock;
        });
    }
}
