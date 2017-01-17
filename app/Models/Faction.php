<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faction extends Model
{
    use SoftDeletes;

    protected $table      = 'faction';
    protected $primaryKey = 'faction_id';
    protected $dates      = ['deleted_at'];

    public function pilots() {

        return $this->belongsToMany('\App\Models\Pilot', 'pilot_factions', 'faction_fk', 'pilot_fk');
    }
}
