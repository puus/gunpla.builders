<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobileSuit extends Model
{
    use SoftDeletes;

    protected $table      = 'mobile_suit';
    protected $primaryKey = 'mobile_suit_id';
    protected $dates      = ['deleted_at'];

    public function manufacturer() {

        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_fk', 'manufacturer_id');
    }

    public function pilots() {

        return $this->belongsToMany('App\Models\Pilot', 'mobile_suit_pilots', 'mobile_suit_fk', 'pilot_fk');
    }
}
