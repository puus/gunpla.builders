<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    use SoftDeletes;

    protected $table      = 'timeline';
    protected $primaryKey = 'timeline_id';
    protected $dates      = ['deleted_at'];

}
