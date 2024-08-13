<?php

namespace khalil\slug2;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../src/Database/Migrations');
        $this->loadViewsFrom(__DIR__.'/../src/views', 'khalil/slug2');

        $this->publishes([
            __DIR__.'/../src/Database/Migrations' => database_path('migrations')], 'slug-migrations');
    }
    public function register(){

    }

}
