<?php

namespace App\Providers;

use App\Permission;
use App\Policies\ModelPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return false
     */
    public function boot()
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->slug, function ($user,$action) use ($permission) {
                    return $user->hasPermissionTo($permission->slug,$action);
                });
            });
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
}
