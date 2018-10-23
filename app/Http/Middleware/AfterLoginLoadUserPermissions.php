<?php

namespace App\Http\Middleware;

use App\Permission;
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

        // Obtem todas as permissões e para cada permissão, verifica se a permissão é permitida ao usuário
        $permissions = Permission::with('roles')->get();

        foreach ($permissions as $permission)
        {
            $permission_define = $this->gate->define($permission->slug , function (User $user) use ($permission)
            {
                return $user->hasPermission($permission);
            });
        }
        //Se ele é super Administrador pode fazer tudo
//        dd(\Auth::user()->isSuperAdmin());
        $this->gate->before(function(User $user, $ability){
            if ($user->isSuperAdmin()) {
                return true;
            }
        });

        return $next($request);
    }
}
