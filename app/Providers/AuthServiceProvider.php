<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\product=> App\Policies\ProductPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    { 
       
        FacadesGate::define('my-product', function (User $user, Product $product)
        {
            return $user->id === $product->user_id;

        }); 


        FacadesGate::define('can-create', function(User $user){
            return $user->roles[0]->name === "admin";

        });

       
    }
}
