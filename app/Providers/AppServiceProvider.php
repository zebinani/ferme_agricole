<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\ServiceProvider;

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
        Gate::define('Admin',function(User $user){
            return $user->isAdmin();
        });
        Gate::define('utilisateur', function(User $user){
            return $user->isutilisateur();
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
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}
