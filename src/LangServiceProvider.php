<?php
namespace YHShanto\LaraLang;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        require __DIR__ . '/routes/web.php';

        $this->publishes([
            __DIR__ . '/config/laralang.php' => config_path('laralang.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/laralang.php', 'laralang'
        );

        $this->app['router']->aliasMiddleware('laralang' , 'YHShanto\LaraLang\Middlewares\LaraLang');
    }
}
