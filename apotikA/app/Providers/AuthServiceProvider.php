<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
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

        Gate::define('update-post','App\Policies\PostPolicy@update');
        
        Gate:define('edit-settings',function($user){
            return $user->isAdmin
            ? Response::allow()
            : Response::deny('You must be a super Administrator.');
            
        });

        Gate::before(function($user,$ability){
            if ($user->isSuperAdmin()){
                return true;
            }
        });

        Gate::after(function($user,$ability,$result,$arguments){
            if ($user->isSuperAdmin()){
                return true;
            }
        });

        // Gate::define('edit-settings',function ($user){
        //     return $user->isAdmin;
        // });

        // Gate::define('update-post',function ($user,$post){
        //     return $user->id === $post->user_id;
        // });
    }
}
