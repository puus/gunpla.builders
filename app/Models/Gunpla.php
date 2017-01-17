<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gunpla extends Model
{
    use SoftDeletes;

    protected $table      = 'gunpla';
    protected $primaryKey = 'gunpla_id';
    protected $dates      = ['deleted_at'];

    public function prices() {
        return $this->hasMany('App\Models\Price', 'gunpla_prices', 'gunpla_fk', 'price_fk');
    }

    public function scale() {
        return $this->belongsTo('App\Models\Scale', 'scale_fk');
    }

    public function grade() {
        return $this->belongsTo('App\Models\Grade', 'grade_fk');
    }

    public function mobileSuit() {
        return $this->belongsTo('App\Models\MobileSuit', 'mobile_suit_fk');
    }

    public function mobileSuitVariation() {
        return $this->belongsTo('App\Models\mobileSuitVariation', 'mobile_suit_variation_fk');
    }
}
