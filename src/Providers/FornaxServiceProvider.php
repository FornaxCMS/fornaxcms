<?php

namespace Fornax\Providers;

use Illuminate\Support\ServiceProvider;

class FornaxServiceProvider extends ServiceProvider
{
    protected $root = __DIR__.'/../..';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom("{$this->root}/routes/web.php");
        $this->loadViewsFrom("{$this->root}/resources/views", 'fornax');
    }
}