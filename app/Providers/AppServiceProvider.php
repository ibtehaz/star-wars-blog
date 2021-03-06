<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        //
        Paginator::useTailwind();
        Model::unguard();

        Gate::define('admin', function (User $user){
           return $user->username ==='Luke Skywalker' || $user->username ==='Yoda' || $user->username ==='Obi-Wan Kenobi' || $user->username ==='Anakin Skywalker' || $user->username ==='Mace Windu';
        });
    }
}
