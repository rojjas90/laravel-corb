<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // se crea  la regla para la eliminacion de tareas de modo que solo se podra si el usuario es el dueño de la tarea y la prioridad es diferente de cero
        $gate->define('delete-todo', function ($user, $todo) {
            // return ($user->id === $todo->user_id && $todo->status === true);
            return ($user->id === $todo->user_id && $todo->priority !== 0);
        });
    }
}
