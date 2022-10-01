<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Providers\CustomUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    // public function boot(GateContract $gate)
    // {
    //     $this->registerPolicies($gate);
    
    //     // The code below sets up the 'api' driver
    //     $this->app['auth']->extend('api', function() {
    //         return new \App\Auth\ApiUserProvider();
    //     });
    // }

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
