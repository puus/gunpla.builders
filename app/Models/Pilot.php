<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pilot extends Model
{
    use SoftDeletes;

    protected $table      = 'pilot';
    protected $primaryKey = 'pilot_id';
    protected $dates      = ['deleted_at'];

    public function mobileSuits() {
        return $this->belongsToMany('App\Models\MobileSuit', 'mobile_suit_pilots', 'pilot_fk', 'mobile_suit_fk');
    }

    public function mobileSuitVariations() {
        return $this->belongsToMany('App\Models\MobileSuitVariation', 'mobile_suit_variations_pilots', 'pilot_fk', 'mobile_suit_variation_fk');
    }

    public function factions() {
        return $this->belongsToMany('App\Models\Faction', 'pilot_factions', 'pilot_fk', 'faction_fk');
    }
}
