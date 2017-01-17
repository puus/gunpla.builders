<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function roles() {

        return $this->belongsToMany('App\Models\Role', 'users_roles');
    }

    public function hasRole($role) {

        foreach ($this->roles->toArray() as $r) {
            if ($r['name'] == $role)
                return true;
        }

        return false;
        //return array_search($role, $this->roles->toArray());
    }

    public function setRole($role) {

    }
}
