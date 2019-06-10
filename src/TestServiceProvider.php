<?php

namespace JesseyChen\Test;

use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Scalar\MagicConst\Dir;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config/qiniu.php' => config_path('qiniu.config')
        ]);
    }

    public function register()
    {
        $this->app->singleton('test', function () {
            return new Test();
        });
    }
}