<?php
namespace JesseyChen\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('test', function () {
            return new Test();
        });
    }
}