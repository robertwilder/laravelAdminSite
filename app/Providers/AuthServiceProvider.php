<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('high-Users', function($user)
        {
            return $user->hasRole('high');
        });
        Gate::define('medium-Users', function($user)
        {
            return $user->hasRole('medium');
        });
        Gate::define('low-Users', function($user)
        {
            return $user->hasRole('low');
        });

        
    }
}
