<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model
{
    use SoftDeletes;

    protected $table      = 'manufacturer';
    protected $primaryKey = 'manufacturer_id';
    protected $dates      = ['deleted_at'];

    public function mobileSuits() {

        return $this->hasMany('App\Models\MobileSuit', 'manufacturer_fk');
    }
}
