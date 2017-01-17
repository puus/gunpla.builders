<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobileSuitVariation extends Model
{
    use SoftDeletes;

    protected $table      = 'mobile_suit_variation';
    protected $primaryKey = 'mobile_suit_variation_id';
    protected $dates      = ['deleted_at'];

    public function manufacturer() {

        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_fk', 'manufacturer_id');
    }

    public function mobileSuit() {

        return $this->belongsTo('App\Models\MobileSuit', 'mobile_suit_fk', 'mobile_suit_id');
    }

    public function pilots() {

        return $this->belongsToMany('App\Models\Pilot', 'mobile_suit_variations_pilots', 'mobile_suit_variation_fk', 'pilot_fk');
    }
}
