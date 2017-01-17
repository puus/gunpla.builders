<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaType extends Model
{
    use SoftDeletes;

    protected $table      = 'media_type';
    protected $primaryKey = 'media_type_id';
    protected $dates      = ['deleted_at'];

    public function media() {

        return $this->hasMany('App\Models\Media', 'media_type_id', 'media_type_fk');
    }
}
