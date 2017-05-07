<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AfterLoginLoadUserPermissions
{   
    /**
     * GateContract $gate
     */
    protected $gate;

    /**
     * @param GateContract
     * @return void
     */
    public function __construct(GateContract $gate)
    {
        $this->gate = $gate;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $permissions = \App\Permission::with('roles')->get();
         
        foreach ($permissions as $permission) {
            $this->gate->define($permission->nome, function(User $user) use ($permission){
                return $user->hasPermission($permission);
            });
        }

        $this->gate->before(function(User $user, $ability){
            return $user->hasAnyRoles('admin');
        });

        return $next($request);
    }
}
