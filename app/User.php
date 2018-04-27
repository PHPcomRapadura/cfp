<?php

namespace App;

use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apelido',
        'email',
        'password',
        'git',
        'cidade',
        'estado',
        'biografia',
        'sexo_id',
        'aeroporto',
        'alimentacao',
        'foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasPermission(Permission $permission)
    {
        $user_permission = $this->roles->first()->permissions;
        return $user_permission->contains('slug',$permission->slug);
    }

    public function hasAnyRoles($roles)
    {
        if (is_array($roles) || is_object($roles)) {
            return !!$roles->intersect($this->roles()->get())->count();
        }
        return false;
    }

    public function isSuperAdmin()
    {
         // dd($this->roles()->get());
        return $this->roles()->get()->first()->id === 1;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
