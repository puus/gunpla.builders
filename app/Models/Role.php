<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Authenticatable
{
    use SoftDeletes;

    protected $table      = 'roles';
    protected $primaryKey = 'role_id';
    protected $dates      = ['deleted_at'];

    public function users() {

        return $this->belongsToMany('User', 'users_roles');
    }
}
