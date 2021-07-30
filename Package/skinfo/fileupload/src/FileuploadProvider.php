<?php

namespace Skinfo\Fileupload;

use Illuminate\Support\ServiceProvider;
use Skinfo\Fileupload\Service\Fileuploadservice;

class FileuploadProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fu', function(){
            return new Fileuploadservice();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
