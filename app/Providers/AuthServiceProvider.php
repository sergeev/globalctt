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

        // Главный провайдер отвечающий за досуп ко всему!

        // Access for only admin & director
        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin', '']);
        });

        Gate::define('manage-teachers', function($user){
            return $user->hasAnyRoles(['admin', 'manager']);
        });

        Gate::define('manage-kvantums', function($user){
            return $user->hasAnyRoles(['admin', 'manager']);
        });

        Gate::define('manage-kvantums-edit', function($user){
            return $user->hasAnyRoles(['admin', '']);
        });
        

        Gate::define('manage-students', function($user){
            return $user->hasAnyRoles(['admin', 'manager']);
        });

        Gate::define('manage-timetables', function($user){
            return $user->hasAnyRoles(['admin', 'manager']);
        });

        // UserController ->
        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

        // Redactor
        Gate::define('manage-events', function($user){
            return $user->hasAnyRoles(['admin', 'redactor', 'manager']);
        });

        // Teacher
        Gate::define('teacher-students-report', function($user){
            return $user->hasAnyRoles(['admin', 'teacher', 'manager']);
        });
    }
}
