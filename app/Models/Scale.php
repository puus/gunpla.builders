<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scale extends Model
{
    use SoftDeletes;

    protected $table      = 'scale';
    protected $primaryKey = 'scale_id';
    protected $dates      = ['deleted_at'];

    public function gunpla() {
        return $this->hasMany('App/Models/Gunpla', 'scale_fk', 'scale_id');
    }
}
