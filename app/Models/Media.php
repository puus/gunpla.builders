<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $table      = 'media';
    protected $primaryKey = 'media_id';
    protected $dates      = ['deleted_at'];

    public function timeline() {

        return $this->belongsTo('App\Models\Timeline', 'timeline_fk', 'timeline_id');
    }

    public function mediaType() {

        return $this->belongsTo('App\Models\MediaType', 'media_type_fk', 'media_type_id');
    }
}
