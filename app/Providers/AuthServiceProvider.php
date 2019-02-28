<?php

namespace App\Providers;

use Auth;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Profil' => 'App\Policies\ProfilPolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return Auth::user()->role->name === 'admin';
            });
        Gate::define('editor', function ($user) {
            return Auth::user()->role->name === 'editor';
            });
        Gate::define('guest', function ($user) {
            return Auth::user()->role->name === 'guest';
            });
    }
}
