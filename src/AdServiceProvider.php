<?php

namespace Zxg321\Admin\Ad;

use Illuminate\Support\ServiceProvider;

class AdServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-admin-ad');

        AdManager::boot();
    }
}
